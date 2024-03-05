<?php

namespace App\Http\Controllers;

use App\Models\PostExperimentalPartB;
use App\Models\PostExperimentalPartC;
use App\Models\PostExperimentalPartD;
use App\Models\PostExperimentalPartE;
use App\Models\PostExperimentalPartF;
use App\Models\PostExperimentalPartG;
use App\Models\PostExperimentalPartH;
use App\Models\PostExperimentalPartI;
use App\Models\PostExperimentalPartJ;
use App\Models\PostExperimentalPartK;
use App\Models\PostExperimentalPartL;
use App\Models\PostExperimentalPartM;
use App\Models\PostExperimentalPartN;
use App\Models\ProlificUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeControllerThree extends Controller
{
    // 45
    public function page_forty_five()
    {
        return view('pages.common.page-forty-five');
    }

    public function page_forty_five_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartB::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);


        return redirect()->route($next_page);
    }

    // 46
    public function page_forty_six()
    {
        return view('pages.common.page-forty-six');
    }

    public function page_forty_six_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartD::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_set' => checkversion(),
            // 'question_part' => $request->question_part,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 47
    public function page_forty_seven()
    {
        return view('pages.common.page-forty-seven');
    }

    public function page_forty_seven_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        $data = PostExperimentalPartC::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_three' => $request->question_three,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 48
    public function page_forty_eight()
    {
        return view('pages.common.page-forty-eight');
    }

    public function page_forty_eight_save(Request $request)
    {
        // return $request;

        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartE::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' =>  $request->question_two,
            'question_three' => $request->question_three,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);


        return redirect()->route($next_page);
    }

    // 49
    public function page_forty_nine()
    {
        return view('pages.common.page-forty-nine');
    }

    public function page_forty_nine_save(Request $request)
    {

        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        // $part_e_one = Session::get('part_e_one');
        // $part_e_two = Session::get('part_e_two');
        // $part_e_three = Session::get('part_e_three');

        $data = PostExperimentalPartE::insert([
            'user_id' => $user_id,
            'question_four' => $request->question_four,
            'question_five' => $request->question_five,
            'question_six' => $request->question_six,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Session::forget('part_e_one');
        // Session::forget('part_e_two');
        // Session::forget('part_e_three');

        return redirect()->route($next_page);
    }

    // 50
    public function page_fifty()
    {
        return view('pages.common.page-fifty');
    }

    public function page_fifty_save(Request $request)
    {
        $next_page = $request->next_page;
        $user_id = Session::get('prolific_pid');

        Session::put('part_f_one', $request->question_one);
        Session::put('part_f_two', $request->question_two);
        Session::put('part_f_three', $request->question_three);

        $data = PostExperimentalPartF::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_three' => $request->question_three,
            'question_four' => $request->question_four,
            'question_five' => $request->question_five,
            'question_six' => $request->question_six,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 51
    public function page_fifty_one()
    {
        return view('pages.common.page-fifty-one');
    }

    public function page_fifty_one_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $part_f_one = Session::get('part_f_one');
        $part_f_two = Session::get('part_f_two');
        $part_f_three = Session::get('part_f_three');

        $data = PostExperimentalPartF::insert([
            'user_id' => $user_id,
            'question_one' => $part_f_one,
            'question_two' => $part_f_two,
            'question_three' => $part_f_three,
            'question_four' => $request->question_four,
            'question_five' => $request->question_five,
            'question_six' => $request->question_six,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Session::forget('part_f_one');
        Session::forget('part_f_two');
        Session::forget('part_f_three');

        return redirect()->route($next_page);
    }

    // 52
    public function page_fifty_two()
    {
        return view('pages.common.page-fifty-two');
    }

    public function page_fifty_two_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        $data = PostExperimentalPartG::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_three' => $request->question_three,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 53
    public function page_fifty_three()
    {
        return view('pages.common.page-fifty-three');
    }

    public function page_fifty_three_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        $data = PostExperimentalPartH::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 54
    public function page_fifty_four()
    {
        return view('pages.common.page-fifty-four');
    }

    public function page_fifty_four_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        $data = PostExperimentalPartH::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 55
    public function page_fifty_five()
    {
        return view('pages.common.page-fifty-five');
    }

    public function page_fifty_five_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        $data = PostExperimentalPartI::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_three' => $request->question_three,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 56
    public function page_fifty_six()
    {
        return view('pages.common.page-fifty-six');
    }

    public function page_fifty_six_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        $data = PostExperimentalPartJ::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_two' => $request->question_two,
            'question_three' => $request->question_three,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 57
    public function page_fifty_seven()
    {
        return view('pages.common.page-fifty-seven');
    }

    public function page_fifty_seven_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;

        $data = PostExperimentalPartK::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route($next_page);
    }

    // 58
    public function page_fifty_eight()
    {
        return view('pages.common.page-fifty-eight');
    }

    public function page_fifty_eight_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartL::insert([
            'user_id' => $user_id,
            'question_one' => $request->question_one,
            'question_set' => checkversion(),
            'created_at' => now(),
            'updated_at' => now()
        ]);


        return redirect()->route($next_page);
    }

    // 59
    public function page_fifty_nine()
    {
        return view('pages.common.page-fifty-nine');
    }

    public function page_fifty_nine_save(Request $request)
    {


        $next_page = $request->next_page;
        Session::put('part_m_one', $request->question_one);
        Session::put('part_m_two', $request->question_two);
        Session::put('part_m_three', $request->question_three);

        return redirect()->route($next_page);
    }

    // 60
    public function page_sixty()
    {
        return view('pages.common.page-sixty');
    }

    public function page_sixty_save(Request $request)
    {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $part_m_one = Session::get('part_m_one');
        $part_m_two = Session::get('part_m_two');
        $part_m_three = Session::get('part_m_three');

        $data = PostExperimentalPartM::insert([
            'user_id' => $user_id,
            'question_set' => checkversion(),
            'question_one' => $part_m_one,
            'question_two' => $part_m_two,
            'question_three' => $part_m_three,
            'question_four' => $request->question_four,
            'question_five' => $request->question_five,
            'question_six' => $request->question_six,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Session::forget('part_m_one');
        Session::forget('part_m_two');
        Session::forget('part_m_three');

        return redirect()->route($next_page);
    }

      // 61
      public function page_sixty_one()
      {
          return view('pages.common.page-sixty-one');
      }

      public function page_sixty_one_save(Request $request)
      {
        $user_id = Session::get('prolific_pid');
        $next_page = $request->next_page;


        $data = PostExperimentalPartN::insert([
            'user_id' => $user_id,
            'gender' => $request->gender,
            'age' => $request->experience_year,
            'work_experience' => $request->work_experience,
            'work_type' => $request->work_type,
            'experience_year' => $request->experience_year,
            'created_at' => now(),
            'updated_at' => now()
        ]);




        return redirect()->route($next_page);
      }

    // payout
    public function payout()
    {
        return view('pages.payout');
    }

    // end_experiment
    public function end_experiment()
    {
        // return redirect('https://www.google.com/');
        // return view('pages.end-experiment');
    }

    public function wrongExperiment()
    {
        return view('pages.experiment-wrong');
    }

    // fromProlific
    public function fromProlific()
    {
        return view('pages.out-from-prolific');
    }

}
