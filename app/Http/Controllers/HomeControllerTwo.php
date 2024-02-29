<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllerTwo extends Controller
{
    public function PostexperimentalquestionnaireFive(){
        return view('pages.questionnaire.Post_experimental_5');
    }
    public function PostexperimentalquestionnaireSix(){
        return view('pages.questionnaire.Post_experimental_6');
    }
    public function PostexperimentalquestionnaireSeven(){
        return view('pages.questionnaire.Post_experimental_7');
    }
    public function PostexperimentalquestionnaireEight()
    {
        return view('pages.questionnaire.Post_experimental_8');
    }
    public function PostexperimentalquestionnaireNine(){
        return view('pages.questionnaire.Post_experimental_9');
    }
    public function PostexperimentalquestionnaireTen(){
        return view('pages.questionnaire.Post_experimental_10');
    }
    public function PostexperimentalquestionnaireEleven(){
        return view('pages.questionnaire.Post_experimental_11');
    }
    public function Thanks(){
        return view('pages.questionnaire.Thank_you');
    }


}
