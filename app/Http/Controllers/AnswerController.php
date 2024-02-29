<?php

namespace App\Http\Controllers;

use App\Models\AnswerSheet;
use App\Models\CompensationStructure;
use App\Models\InformationWithColleagues;
use App\Models\PostExperimental;
use App\Models\PostExperimentalPartA;
use App\Models\PostExperimentalPartAOne;
use App\Models\PostExperimentalPartC;
use App\Models\PostExperimentalPartD;
use App\Models\PostExperimentalPartE;
use App\Models\PostExperimentalPartF;
use App\Models\PostExperimentalPartG;
use App\Models\SharingInformation;
use App\Models\ShortcutsDiscovered;
use App\Models\StageTwo;
use App\Models\TaskInformation;
use App\Models\UserAnswer;
use App\Models\WorkEnvironment;
use App\Models\YourRoleInOrganisation;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    // chackAnswer
    /**
     * @objective Chack Answer right or wrong
     * @endpoint http://survey.test/check-anwser/pageNumber/boxNumber/value
     * @method  GET
     * @param  [pageNumber,boxNumber]
     * @response true or false
    */

    public function chackAnswer($period,$pageNumber,$boxNumber,$value)
    {
        $row_name = "box_".$boxNumber;
        $result = AnswerSheet::where([['page_number',$pageNumber],[$row_name,$value]])->first();

        if($result)
        {
            // $data = UserAnswer::updateOrCreate(
            //     ['user_id' => "11",'page_number' => $pageNumber],
            //     ['period' => $period,'user_id' => "11",$row_name => $value]
            // );
            return $data = "true";

        }
        else{
            return $data = "false";
        }
    }

    // pageWishAnswer
    /**
     * @objective Save Page wish answer
     * @endpoint http://survey.test/check-anwser/page-wish-answer-save
     * @method  Past
     * @param  [pageNumber,boxNumber]
     * @response true or false
    */
    public function pageWishAnswer(Request $request)
    {
        // return $request->pageData;
        $page = $request->pageNum;
        $user_id = "11";
        $data = UserAnswer::where([['user_id',$user_id],['page_number',$page]])->updateOrCreate(
            ['user_id' => $user_id,'page_number' => $page],
            [
                'box_1' => $request->pageData[0],
                'box_2' => $request->pageData[1],
                'box_3' => $request->pageData[2],
                'box_4' => $request->pageData[3],
                'box_5' => $request->pageData[4],
                'box_6' => $request->pageData[5]
            ]
        );
        // $data = UserAnswer::where([['user_id',$user_id],['page_number',$page]])->get();


        return $data;
    }

    // saveFinalAns
    public function saveFinalAns(Request $request)
    {
        $period     = $request->period;
        $ansData    = $request->pageData;
        $user_id = Session::get('prolific_pid');

        // $data = [];
        // return $ansData[1][0];
        // foreach($ansData as $key=>$row)
        // {
        //     // return $key;
        //     $data = UserAnswer::where([['user_id',$user_id],['page_number',$key]])->updateOrCreate(
        //         ['period' => $period,'user_id' => $user_id,'page_number' => $key],
        //         [
        //             'box_1' => $row[1],
        //             'box_2' => $row[2],
        //             'box_3' => $row[3],
        //             'box_4' => $row[4],
        //             'box_5' => $row[5],
        //             'box_6' => $row[6]
        //         ]
        //     );
        // }

        $data = UserAnswer::where([['user_id',$user_id],['period',$period]])->updateOrCreate(
            ['user_id' => $user_id,'period' => $period],
            [
                'box_11' => $ansData[1][0],
                'box_12' => $ansData[1][1],
                'box_13' => $ansData[1][2],
                'box_14' => $ansData[1][3],
                'box_15' => $ansData[1][4],
                'box_16' => $ansData[1][5],
                'box_21' => $ansData[2][0],
                'box_22' => $ansData[2][1],
                'box_23' => $ansData[2][2],
                'box_24' => $ansData[2][3],
                'box_25' => $ansData[2][4],
                'box_26' => $ansData[2][5],
                'box_31' => $ansData[3][0],
                'box_32' => $ansData[3][1],
                'box_33' => $ansData[3][2],
                'box_34' => $ansData[3][3],
                'box_35' => $ansData[3][4],
                'box_36' => $ansData[3][5],
                'box_41' => $ansData[4][0],
                'box_42' => $ansData[4][1],
                'box_43' => $ansData[4][2],
                'box_44' => $ansData[4][3],
                'box_45' => $ansData[4][4],
                'box_46' => $ansData[4][5],
                'box_51' => $ansData[5][0],
                'box_52' => $ansData[5][1],
                'box_53' => $ansData[5][2],
                'box_54' => $ansData[5][3],
                'box_55' => $ansData[5][4],
                'box_56' => $ansData[5][5],
                'box_61' => $ansData[6][0],
                'box_62' => $ansData[6][1],
                'box_63' => $ansData[6][2],
                'box_64' => $ansData[6][3],
                'box_65' => $ansData[6][4],
                'box_66' => $ansData[6][5],
                'box_71' => $ansData[7][0],
                'box_72' => $ansData[7][1],
                'box_73' => $ansData[7][2],
                'box_74' => $ansData[7][3],
                'box_75' => $ansData[7][4],
                'box_76' => $ansData[7][5],
                'box_81' => $ansData[8][0],
                'box_82' => $ansData[8][1],
                'box_83' => $ansData[8][2],
                'box_84' => $ansData[8][3],
                'box_85' => $ansData[8][4],
                'box_86' => $ansData[8][5],
                'box_91' => $ansData[9][0],
                'box_92' => $ansData[9][1],
                'box_93' => $ansData[9][2],
                'box_94' => $ansData[9][3],
                'box_95' => $ansData[9][4],
                'box_96' => $ansData[9][5],
                'box_101' => $ansData[10][0],
                'box_102' => $ansData[10][1],
                'box_103' => $ansData[10][2],
                'box_104' => $ansData[10][3],
                'box_105' => $ansData[10][4],
                'box_106' => $ansData[10][5],
                'box_111' => $ansData[11][0],
                'box_112' => $ansData[11][1],
                'box_113' => $ansData[11][2],
                'box_114' => $ansData[11][3],
                'box_115' => $ansData[11][4],
                'box_116' => $ansData[11][5],
                'box_121' => $ansData[12][0],
                'box_122' => $ansData[12][1],
                'box_123' => $ansData[12][2],
                'box_124' => $ansData[12][3],
                'box_125' => $ansData[12][4],
                'box_126' => $ansData[12][5],
                'box_131' => $ansData[13][0],
                'box_132' => $ansData[13][1],
                'box_133' => $ansData[13][2],
                'box_134' => $ansData[13][3],
                'box_135' => $ansData[13][4],
                'box_136' => $ansData[13][5],
                'box_141' => $ansData[14][0],
                'box_142' => $ansData[14][1],
                'box_143' => $ansData[14][2],
                'box_144' => $ansData[14][3],
                'box_145' => $ansData[14][4],
                'box_146' => $ansData[14][5],
                'box_151' => $ansData[15][0],
                'box_152' => $ansData[15][1],
                'box_153' => $ansData[15][2],
                'box_154' => $ansData[15][3],
                'box_155' => $ansData[15][4],
                'box_156' => $ansData[15][5],
                'box_161' => $ansData[16][0],
                'box_162' => $ansData[16][1],
                'box_163' => $ansData[16][2],
                'box_164' => $ansData[16][3],
                'box_165' => $ansData[16][4],
                'box_166' => $ansData[16][5],
                'box_171' => $ansData[17][0],
                'box_172' => $ansData[17][1],
                'box_173' => $ansData[17][2],
                'box_174' => $ansData[17][3],
                'box_175' => $ansData[17][4],
                'box_176' => $ansData[17][5],
                'box_181' => $ansData[18][0],
                'box_182' => $ansData[18][1],
                'box_183' => $ansData[18][2],
                'box_184' => $ansData[18][3],
                'box_185' => $ansData[18][4],
                'box_186' => $ansData[18][5],
                'box_191' => $ansData[19][0],
                'box_192' => $ansData[19][1],
                'box_193' => $ansData[19][2],
                'box_194' => $ansData[19][3],
                'box_195' => $ansData[19][4],
                'box_196' => $ansData[19][5],
                'box_201' => $ansData[20][0],
                'box_202' => $ansData[20][1],
                'box_203' => $ansData[20][2],
                'box_204' => $ansData[20][3],
                'box_205' => $ansData[20][4],
                'box_206' => $ansData[20][5]
            ]
        );

        return $data;
    }

    // shortcutsDiscovered
    public function shortcutsDiscovered(Request $request)
    {
        // return $request;
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        // $data = ShortcutsDiscovered::where('user_id',$user_id)->updateOrCreate(
        $data = ShortcutsDiscovered::updateOrCreate(
            ['user_id' => $user_id],
            [
                'box_1' => $request->box_1,
                'box_2' => $request->box_2,
                'box_3' => $request->box_3,
                'box_4' => $request->box_4,
                'box_5' => $request->box_5,
                'box_6' => $request->box_6
            ]
        );

        return redirect()->route($next_page);
    }

    // stageTwoAnswer
    // pageWishAnswer
    /**
     * @objective Save Page wish answer
     * @endpoint http://survey.test/check-anwser/page-wish-answer-save
     * @method  Past
     * @param  [pageNumber,boxNumber]
     * @response true or false
    */
    public function stageTwoAnswer(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        return $request->all();
        $data = StageTwo::updateOrCreate(
            ['user_id' => $user_id],
            [
                'page_141' => $request->page_141,
                'page_142' => $request->page_142,
                'page_261' => $request->page_261,
                'page_262' => $request->page_262,
                'page_281' => $request->page_281,
                'page_282' => $request->page_282,
                'page_301' => $request->page_301,
                'page_302' => $request->page_302,
                'page_321' => $request->page_321,
                'page_322' => $request->page_322,
                'page_351' => $request->page_351,
                'page_352' => $request->page_352,
                'page_353' => $request->page_353,
                'page_354' => $request->page_354,
                'page_371' => $request->page_371,
                'page_372' => $request->page_372,
                'page_373' => $request->page_373,
                'page_374' => $request->page_374,
                'page_375' => $request->page_375,
                'page_40' => $request->page_40,

            ]
        );

        return redirect()->route($next_page);
    }

    // Task Information
    public function taskInfoAns(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $data = TaskInformation::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        return redirect()->route($next_page);
    }

    // yourRoleInOrg
    public function yourRoleInOrg(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $data = YourRoleInOrganisation::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        return redirect()->route($next_page);
    }
    // workEnvironmentAns
    public function workEnvironmentAns(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        Session::put('work_question_one',$request->question_one);
        Session::put('work_question_two',$request->question_two);

        // $data = WorkEnvironment::insert([
        //     'user_id' => $user_id,
        //     'question_one' => $request->question_one,
        //     'question_two' => $request->question_two,
        //     'created_at'    => now(),
        //     'updated_at'    => now()
        // ]);

        return redirect()->route($next_page);
    }

    public function workEnvironmentAnsFinal(Request $request)
    {

        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $qus_one = Session::get('work_question_one');
        $qus_two = Session::get('work_question_two');

        // return $qus_one;

        $data = WorkEnvironment::insert([
            'user_id' => $user_id,
            'question_one' => $qus_one,
            'question_two' => $qus_two,
            'teammate' => $request->teammate,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        // Session::forget('work_question_one');
        // Session::forget('work_question_two');

        return redirect()->route($next_page);

    }
    // compensationStructureAns
    public function compensationStructureAns(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $data = CompensationStructure::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_set' =>checkversion(),
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        return redirect()->route($next_page);
    }
    // sharingInformationAns
    public function sharingInformationAns(Request $request)
    {
        // return $request;
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $data = SharingInformation::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_three' => $request->question_three,
            'question_four' => $request->question_four,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        return redirect()->route($next_page);
    }

    // sharingInformationAns
    public function sharingInformationWithColAns(Request $request)
    {
        // return $request;
        $next_page = $request->next_page;
        Session::put('sharing_question_one',$request->question_one);
        Session::put('sharing_question_two',$request->question_two);
        return redirect()->route($next_page);
    }

    // sharingInformationWithColAnsFinal
    public function sharingInformationWithColAnsFinal(Request $request)
    {


        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $qus_one = Session::get('sharing_question_one');
        $qus_two = Session::get('sharing_question_two');

        // return $qus_one;

        $data = InformationWithColleagues::insert([
            'user_id' => $user_id,
            'question_one' => $qus_one,
            'question_two' => $qus_two,
            'question_three' => $request->question_three,
            'question_four' => $request->question_four,
            'question_five' => $request->question_five,
            'question_set' =>checkversion(),
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Session::forget('sharing_question_one');
        Session::forget('sharing_question_two');

        return redirect()->route($next_page);
    }

    // postExpMainOne
    public function postExpMainOne(Request $request)
    {
        // return $request;
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartA::insert([
            'user_id' => $user_id,
            'question_set' =>checkversion(),
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);



         return redirect()->route($next_page);
    }
    // postExpMainTwo
    public function postExpMainTwo(Request $request)
    {

        $next_page = $request->next_page;

        Session::put('question_one',$request->question_one);
        Session::put('question_two_1',$request->question_two_1);
        Session::put('question_two_2',$request->question_two_2);
        Session::put('question_two_3',$request->question_two_3);
        Session::put('question_two_4',$request->question_two_4);



        return redirect()->route($next_page);
    }

    // postExpMainThree
    public function postExpMainThree(Request $request)
    {
        // return $request;
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $one    = Session::get('question_one');
        $two_1  = Session::get('question_two_1');
        $two_2  = Session::get('question_two_2');
        $two_3  = Session::get('question_two_3');
        $two_4  = Session::get('question_two_4');

        // return $qus_one;

        $data = PostExperimentalPartAOne::insert([
            'user_id' => $user_id,
            'question_one' => $one,
            'question_set' =>checkversion(),
            'question_two_1' => $two_1,
            'question_two_2' => $two_2,
            'question_two_3' => $two_3,
            'question_two_4' => $two_4,
            'question_three_1' => $request->question_three_1,
            'question_three_2' => $request->question_three_2,
            'question_three_3' => $request->question_three_3,
            'question_three_4' => $request->question_three_4,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Session::forget('question_one');
        Session::forget('question_two_1');
        Session::forget('question_two_2');
        Session::forget('question_two_3');
        Session::forget('question_two_4');

        return redirect()->route($next_page);
    }

    // postExpStepOne
    public function postExpStepOne(Request $request)
    {
        $next_page = $request->next_page;
        Session::put('sympathetic',$request->sympathetic);
        Session::put('compassionate',$request->compassionate);
        Session::put('soft_hearted',$request->soft_hearted);
        return redirect()->route($next_page);
    }

    // postExpStepTwo
    public function postExpStepTwo(Request $request)
    {
    //    return $request;
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;
        $qus_one = Session::get('sympathetic');
        $qus_two = Session::get('compassionate');
        $qus_three = Session::get('soft_hearted');

        // return $qus_one;

        $data = PostExperimental::insert([
            'user_id' => $user_id,
            'question_one' => $qus_one,
            'question_two' => $qus_two,
            'question_three' => $qus_three,
            'question_four' => $request->warm,
            'question_five' => $request->tender,
            'question_six' => $request->moved,
            'question_set' =>checkversion(),
            'question_part' => $request->question_part,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);

        Session::forget('sympathetic');
        Session::forget('compassionate');
        Session::forget('soft_hearted');

        return redirect()->route($next_page);
    }
    // postExpStepThree
    public function postExpStepThree(Request $request)
    {
    //    return $request;
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartC::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_set' =>checkversion(),
            'question_part' => $request->question_part,
            'created_at'    => now(),
            'updated_at'    => now()
        ]);



        return redirect()->route($next_page);
    }
    // postExpStepFour
    public function postExpStepFour(Request $request)
    {
    //    return $request;
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartD::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_set' =>checkversion(),
            'created_at'    => now(),
            'updated_at'    => now()
        ]);



        return redirect()->route($next_page);
    }
    // postExpStepFive
    public function postExpStepFive(Request $request)
    {
        // return $request;
         $user_id = Session::get('prolific_pid');
         $next_page = $request->next_page;


         $data = PostExperimentalPartE::insert([
             'user_id' => $user_id,
             'question_one' => $request->question_one,
             'question_set' =>checkversion(),
             'created_at'    => now(),
             'updated_at'    => now()
         ]);



         return redirect()->route($next_page);
    }
    // postExpStepSix
    public function postExpStepSix(Request $request)
    {
        // return $request;
         $user_id = Session::get('prolific_pid');
         $next_page = $request->next_page;


         $data = PostExperimentalPartE::insert([
             'user_id' => $user_id,
             'question_one' => $request->question_one,
             'question_set' =>checkversion(),
             'created_at'    => now(),
             'updated_at'    => now()
         ]);



         return redirect()->route($next_page);
    }
    // postExpStepSeven
    public function postExpStepSeven(Request $request)
    {
        // return $request;
         $user_id = Session::get('prolific_pid');
         $next_page = $request->next_page;


         $data = PostExperimentalPartF::insert([
             'user_id' => $user_id,
             'question_one' => $request->question_one,
             'question_two' => $request->question_two,
             'created_at'    => now(),
             'updated_at'    => now()
         ]);



         return redirect()->route($next_page);
    }
    // postExpStepEight
    public function postExpStepEight(Request $request)
    {
        // return $request;
         $user_id = Session::get('prolific_pid');
         $next_page = $request->next_page;


         $data = PostExperimentalPartG::insert([
             'user_id' => $user_id,
             'gender' => $request->gender,
             'age' => $request->experience_year,
             'work_experience' => $request->work_experience,
             'work_type' => $request->work_type,
             'experience_year' => $request->experience_year,
             'created_at'    => now(),
             'updated_at'    => now()
         ]);



         return redirect()->route($next_page);
    }
}
