<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MovieController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    # Display the homepage
    public function index()
    {
        return $this->render('index.html.twig');
    }


    /**
     * @Route("/search", name="search")S
     */
    # Retrieve the search response and display the results on the search page
    public function search(Request $request)
    {
        $keyArr = array('green', 'red', 'blue', 'yellow');  # Define acceptable keywords
        $keyword = $request->query->get('keyword'); # Get keyword from submitted form

        if(in_array(strtolower($keyword), $keyArr)) # Check the keyword is valid
        {
            $results = $this->searchOMDb($keyword, $keyArr);    # Get OMDb search results

            if($results['Response'] != 'False') # If results are found, send to display page
            {
                return $this->render('search.html.twig', array('results'=> $results['Search']));
            }
        }

        # If no results found, return so homepage and display error
        return $this->render('index.html.twig', array('error'=> "Unable to process search for '" . $keyword .
            "'. Please select from the dropdown list."));
    }


    # Search the OMDbAPI for movies given a keyword and an accepted keyword array
    private function searchOMDb($keyword, $keyArr)
    {
        $url = "http://www.omdbapi.com/?s=" . $keyword ."&apikey=81e7ac03"; # Define the search url with the api key and keyword

        $data = file_get_contents($url);    # Retrieve and decode json response
        $data = json_decode($data, true);

        if($data['Response'] != 'False')    # If results have been found
        {
            foreach($data['Search'] as &$movie) # For each movie
            {
                $title = explode(' ', $movie['Title']); # Split string into array
                $movie['FirstW'] = $this->getColour($title, $keyArr);   # Retrieve first keyword instance in title
            }
        }
        return $data;
    }


    # Retrieve the first instance of a keyword (colour) in the movie title
    private function getColour($title, $keyArr){

        foreach($title as $word)    # For each word in the title
        {
            $word = preg_replace("/[^A-Za-z0-9 :\-]/", '', $word); # Ignore brackets and other chars
            if(in_array(strtolower($word), $keyArr))    # Check if a word matches, if so return the word
            {
                return $word;
            }
        }
        return 'Grey';  # If no matching keyword, return 'grey' color. (This was for when I allowed a user to search for other keywords in the url)
    }
}
