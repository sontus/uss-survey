<?php

namespace App\Http\Controllers;

use App\Exports\ReportExport;
use App\Models\ParticipantPayment;
use App\Models\PostExperimentalPartA;
use App\Models\PostExperimentalPartAOne;
use App\Models\PostExperimentalPartB;
use App\Models\ShortcutsDiscovered;
use App\Models\UserAnswer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    // report
    public function report()
    {
        $reports = UserAnswer::get();
        return view('survey-report',compact('reports'));
    }

    // report-details
    public function reportDetails($period)
    {
        $period_name = $period;
        $results= UserAnswer::where('period',$period)->get();

        // dd($results);
        return view('pages.report-details',compact('results','period_name'));
    }

    // peq_report
    public function peq_report()
    {

        // $current_version = checkversion();
        $data = PostExperimentalPartB::select(
                '*',
                // 'post_experimental_part_a_s.question_one as q_4',
                // 'post_experimentals.question_one as bq_1',
                // 'post_experimentals.question_two as bq_2',
                // 'post_experimentals.question_three as bq_3',
                // 'post_experimentals.question_four as bq_4',
                // 'post_experimentals.question_five as bq_5',
                'work_environments.teammate as teammate',
                'post_experimental_part_b_s.user_id as user',
                'post_experimental_part_a_s.question_one as q_a_1',
                'post_experimental_part_a_s.question_two as q_a_2',

                'post_experimental_part_a_ones.question_one as q_one_a',
                'post_experimental_part_a_ones.question_three_1 as q_three_a',
                'post_experimental_part_a_ones.question_three_2 as q_three_b',
                'post_experimental_part_a_ones.question_three_3 as q_three_c',
                'post_experimental_part_a_ones.question_three_4 as q_three_d',

                'post_experimental_part_b_s.question_one as q_b_1',
                'post_experimental_part_b_s.question_two as q_b_2',

                'post_experimental_part_c_s.question_one as q_c_1',
                'post_experimental_part_c_s.question_two as q_c_2',
                'post_experimental_part_c_s.question_three as q_c_3',

                'post_experimental_part_d_s.question_one as q_d_1',

                'post_experimental_part_e_s.question_one as q_e_1',
                'post_experimental_part_e_s.question_two as q_e_2',
                'post_experimental_part_e_s.question_three as q_e_3',

                // 'post_experimental_part_f_s.question_one as q_f_1',
                // 'post_experimental_part_f_s.question_two as q_f_2',
                // 'post_experimental_part_f_s.question_three as q_f_3',

                'post_experimental_part_g_s.question_one as q_g_1',
                'post_experimental_part_h_s.question_set as question_set_number',
                'post_experimental_part_h_s.question_one as q_h_1',
                'post_experimental_part_i_s.question_one as q_i_1',
                'post_experimental_part_j_s.question_one as q_j_1',
                'post_experimental_part_k_s.question_one as q_k_1',
                'post_experimental_part_l_s.question_one as q_l_1',

                'post_experimental_part_m_s.question_one as q_m_1',
                'post_experimental_part_m_s.question_two as q_m_2',
                'post_experimental_part_m_s.question_three as q_m_3',
                'post_experimental_part_m_s.question_four as q_m_4',
                'post_experimental_part_m_s.question_five as q_m_5',
                'post_experimental_part_m_s.question_six as q_m_6',

                'post_experimental_part_n_s.gender as gender',
                'post_experimental_part_n_s.age as age',
                'post_experimental_part_n_s.work_experience as work_experience',
                'post_experimental_part_n_s.work_type as work_type',
                'post_experimental_part_n_s.experience_year as experience_year',


                )

                ->leftJoin('work_environments','work_environments.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_a_ones','post_experimental_part_a_ones.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_a_s','post_experimental_part_a_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_c_s','post_experimental_part_c_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_d_s','post_experimental_part_d_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_e_s','post_experimental_part_e_s.user_id','post_experimental_part_b_s.user_id')
                // ->leftJoin('post_experimental_part_f_s','post_experimental_part_f_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_g_s','post_experimental_part_g_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_h_s','post_experimental_part_h_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_i_s','post_experimental_part_i_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_j_s','post_experimental_part_j_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_k_s','post_experimental_part_k_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_l_s','post_experimental_part_l_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_m_s','post_experimental_part_m_s.user_id','post_experimental_part_b_s.user_id')
                ->leftJoin('post_experimental_part_n_s','post_experimental_part_n_s.user_id','post_experimental_part_b_s.user_id')

                ->get();
        // dd($data);
        return view('pages.peq-report',compact('data'));
    }

    /**

    * @return \Illuminate\Support\Collection

    */

    public function export()

    {

        return Excel::download(new ReportExport, 'report.xlsx');

    }

    // setVersion
    public function setVersion()
    {
        $data = DB::table('settings')->first();
       return view('set-version',compact('data'));
    }
    // saveVersion
    public function saveVersion(Request $request)
    {
        DB::table('settings')
        ->updateOrInsert(
            ['id' => '1'],
            ['set_name' => $request->version]
        );
        return redirect()->back();
    }

    // paymentReport
    function paymentReport() {
        $payments = ParticipantPayment::latest()->get();
        $total_participant = ParticipantPayment::count();
        return view('payment-report',compact('payments','total_participant'));
    }

    function paidPayment($user_id) {
       $participant = ParticipantPayment::where('user_id',$user_id)->update(
        [
            'payment_status' => 'Paid',
            'payment_date' => Carbon::now()
        ]);

        return redirect()->back();
    }
}
