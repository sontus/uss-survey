<?php

namespace App\Http\Controllers;

use App\Models\ProlificUser;
use App\Models\ShortcutsDiscovered;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * View Home Page
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function index()
    {

        $prolific_pid = request()->get('PROLIFIC_PID');
        $study_id = request()->get('STUDY_ID');
        $session_id = request()->get('SESSION_ID');

        if (empty($prolific_pid) || empty($study_id) || empty($session_id)) {
            return redirect()->route('out-from-prolific');
        }

        Session::put('prolific_pid', $prolific_pid);
        Session::put('study_id', $study_id);
        Session::put('session_id', $session_id);

        ProlificUser::insert([
            'prolific_pid' => Session::get('prolific_pid'),
            'study_id' => Session::get('study_id'),
            'session_id' => Session::get('session_id'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return view('pages.index');
    }

    public function one(Request $request)
    {

        return view('pages.page-one');
    }

    public function new_role_org()
    {

        return view('pages.new-role-org');


    }

    /**
     * View introduction-to-phase-one Page
     * @endpoint http://survey.test/introduction-to-phase-one
     * @method  GET
     * @response introduction-to-phase-one page
     */
    public function introductionToPhaseOne()
    {
        return view('pages.introduction-to-phase-one');
    }

    /**
     * View Home Page
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function taskOne()
    {
        return view('pages.task-one');
    }

    /**
     * View Home Page
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function taskTwo()
    {
        return view('pages.task-two');
    }

    /**
     * View Home Page
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function taskThree()
    {
        return view('pages.task-three');
    }

    public function preliminaryPeriod()
    {
        return view('pages.preliminary_period');
    }

    public function preliminaryPeriodText()
    {
        return view('pages.preliminary_period_text');
    }


    public function productionOne()
    {
        return view('pages.production-one');
    }

    public function productionTwo()
    {
        return view('pages.production-two');
    }

    /**
     * Task Understand Ability Questionnair
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function TaskUnderstandabilityQuestionnaire()
    {
        return view('pages.task-understandability-questionnaire-one');
    }


    /**
     * Task Understand Ability Questionnair
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function TaskUnderstandabilityQuestionnaireTwo()
    {
        return view('pages.task-understandability-questionnaire-two');
    }

    /**
     * Task Understand Ability Questionnair
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function TaskUnderstandabilityQuestionnaireThree()
    {
        return View('pages.task-understandability-questionnaire-three');
    }

    /**
     * Task Understand Ability Questionnair
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function TaskUnderstandabilityQuestionnaireFour()
    {
        return view('pages.task-understandability-questionnaire-four');
    }

    /**
     * Task Understand Ability Questionnair
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function TaskUnderstandabilityQuestionnaireFive()
    {
        return view('pages.task-understandability-questionnaire-five');
    }


    /**
     * taskInformation
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function taskInformation(Request $request)
    {
        Session::put('preliminaryCorrect', $request->preliminary);
        return view('pages.task-information');
    }


    /**
     * productionPeriodOne
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function productionPeriodText()
    {
        return view('pages.production-period-text');
    }

    /**
     * productionPeriodOne
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function productionPeriodOne()
    {
        return view('pages.production-period-one');
    }

    /**
     * shortcutsDiscoveredInThisPeriod
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function shortcutsDiscoveredInThisPeriod()
    {
        return view('pages.shortcuts-discovered-in-this-period');
    }

    /**
     * preliminaryPeriodResult
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function preliminaryPeriodResult()
    {
        return view('pages.preliminary-period-result');
    }

    /**
     * viewMyAnswerSheets
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function viewMyAnswerSheets()
    {
        $user_id = Session::get('prolific_pid');
        $result = DB::table('useranswer')->where([['period', 'Production-Period-1'], ['user_id', $user_id]])->first();
        return view('pages.view-my-answer-sheets', compact('result'));
    }

    /**
     * viewMyAnswerSheetsTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function viewMyAnswerSheetsTwo()
    {
        $user_id = Session::get('prolific_pid');
        $result = DB::table('useranswer')->where([['period', 'Production-Period-2'], ['user_id', $user_id]])->first();
        return view('pages.view-my-answer-sheets-two', compact('result'));
    }


    /**
     * productionPeriodOneResult
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function productionPeriodOneResult()
    {
        return view('pages.production-period-one-result');
    }

    /**
     * productionPeriodTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function productionPeriodTwoText(Request $request)
    {
        Session::put('productionOneCorrect', $request->productionOne);
        return view('pages.production-period-two-text');
    }

    /**
     * productionPeriodTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function productionPeriodTwo()
    {
        return view('pages.production-period-two');
    }

    /**
     * shortcutsDiscoveredInThisPeriodTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function shortcutsDiscoveredInThisPeriodTwo()
    {
        $user_id = Session::get('prolific_pid');
        $shortcuts = ShortcutsDiscovered::where('user_id', $user_id)->first();
        // dd($shortcuts);
        return view('pages.shortcuts-discovered-in-this-period-two', compact('shortcuts'));
    }

    /**
     * productionPeriodTwoResult
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function productionPeriodTwoResult()
    {
        return view('pages.production-period-two-result');
    }

    /**
     * introductionToPhaseTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function introductionToPhaseTwo(Request $request)
    {
        Session::put('productionTowCorrect', $request->productionTow);
        return view('pages.introduction-to-phase-two');
    }

    /**
     * yourRoleInOrganisation
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function yourRoleInOrganisation()
    {
        return view('pages.your-role-in-organisation');
    }

    /**
     * organisationUnderstandability
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function organisationUnderstandability()
    {
        return view('pages.organisation-understandability-questionnaire');
    }

    /**
     * workEnvironment
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function workEnvironment()
    {
        return view('pages.work-environment');
    }

    /**
     * workEnvironmentUnderstandabilityQuestionnaire
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function workEnvironmentUnderstandabilityQuestionnaire()
    {
        return view('pages.questionnaire.WorkenvironmentUnderstandabilityQuestionnaire');
    }


    /**
     * compensationStructure
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function compensationStructure()
    {
        return view('pages.questionnaire.CompensationStructure');
    }

    /**
     * compensationQuestionnaire
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function compensationQuestionnaire()
    {
        return view('pages.questionnaire.CompensationStructureQuestionnaire');
    }

    /**
     * compensationQuestionnaireTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function compensationQuestionnaireTwo()
    {
        return view('pages.questionnaire.CompensationStructureQuestionnaireTwo');
    }

    /**
     * compensationStructureTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function compensationStructureTwo()
    {
        return view('pages.questionnaire.CompensationStructure_two');
    }

    /**
     * compensationStructureTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */

    public function workEnvironmentQuestionnaireThree()
    {
        return view('pages.questionnaire.WorkenvironmentQuestionnaire');
    }

    /**
     * compensationStructureTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function sharingInformColleagues()
    {
        return view('pages.questionnaire.Sharing_of_information_with_colleagues');
    }

    /**
     * compensationStructureTwo
     * @endpoint http://survey.test/
     * @method  GET
     * @response index page
     */
    public function sharingUnderstandabilityQ()
    {
        return view('pages.questionnaire.Sharing_of_information_with_colleaguesUnderstandabilityQuestionnaire2');
    }

    public function optionsToShareInformationWithColleagues()
    {
        return view('pages.questionnaire.Options_to_share_information_with_colleagues-2');
    }

    public function Sharing_of_information_Questionnaire_two()
    {
        return view('pages.questionnaire.Sharing_of_information_colleaguesUnderstandabilityQuestionnaire2');
    }

    public function SharingofolleaguesUnderstandabilityQuestionnaireFour()
    {
        return view('pages.questionnaire.Sharing_of_information_with_colleagues4');
    }

    public function OptionstoshareinformationwithcolleaguesFour()
    {
        return view('pages.questionnaire.Options_to_share_information_with_colleagues');
    }

    public function Sharingofinformationfive()
    {
        return view('pages.questionnaire.Sharing_of_information_colleaguesUnderstandabilityQuestionnaire3');
    }

    public function Sharingofinformationsix()
    {
        return view('pages.questionnaire.Sharing_of_information_with_colleagues_six');

    }

    public function PostexperimentalquestionnaireOne()
    {
        return view('pages.questionnaire.Post_experimental_questionnaire');
    }

    public function PostexperimentalquestionnaireTwo()
    {
        return view('pages.questionnaire.Postexperimental_questionnaire_2');
    }

    public function PostexperimentalquestionnaireThree()
    {
        return view('pages.questionnaire.Postexperimental_questionnaire_3');
    }

    public function PostexperimentalquestionnaireFour()
    {
        return view('pages.questionnaire.Post_experimental_4');
    }


    /**
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function sharingOfKnowledgeWithColleagues()
    {
        return view('pages.page-thirty-six');
    }
}
