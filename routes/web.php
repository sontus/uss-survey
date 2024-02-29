<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeControllerTwo;
use App\Http\Controllers\ParticipantPaymentController;
use App\Http\Controllers\HomeControllerThree;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/view-report',[ReportController::class,'report'])->name('report-view');
    Route::get('/report-details/{id}',[ReportController::class,'reportDetails'])->name('report-details');
    Route::get('/export-report',[ReportController::class, 'export'])->name('report-export');
    // peq report
    Route::get('/peq-report-view',[ReportController::class,'peq_report'])->name('peq-report');

    // set question version
    Route::get('/set-version',[ReportController::class,'setVersion'])->name('set-version');
    Route::post('/save-version',[ReportController::class,'saveVersion'])->name('save-version');

    //  Payment Report
    Route::get('payment-report',[ReportController::class,'paymentReport'])->name('payment-report');
    Route::get('paid-payment/{user_id}',[ReportController::class,'paidPayment'])->name('paid-payment');
});


// Page 1
Route::get('/',[HomeController::class,'index'])->name('home')->middleware('preventBackHistory');
// Page 2
Route::get('/one',[HomeController::class,'one'])->name('one')->middleware(['preventBackHistory','prolificValidation']);
// Page 3
Route::get('/your-role-in-org',[HomeController::class,'new_role_org'])->name('new-your-role-org')->middleware(['preventBackHistory','prolificValidation']);
// Page 4
Route::get('/introduction-to-phase-one',[HomeController::class,'introductionToPhaseOne'])->name('introduction-to-phase-one')->middleware(['preventBackHistory','prolificValidation']);
// Page 5
Route::get('/task-one',[HomeController::class,'taskOne'])->name('task-one')->middleware(['preventBackHistory','prolificValidation']);
// Page 6
Route::get('/task-two',[HomeController::class,'taskTwo'])->name('task-two')->middleware(['preventBackHistory','prolificValidation']);
// Page 7
Route::get('/task-three',[HomeController::class,'taskThree'])->name('task-three')->middleware(['preventBackHistory','prolificValidation']);
// Page 8
Route::get('/task-understandability-questionnaire',[HomeController::class,'TaskUnderstandabilityQuestionnaire'])->name('task-understandability-questionnaire')->middleware(['preventBackHistory','prolificValidation']);
// Page 9
Route::get('/task-understandability-questionnaire-two',[HomeController::class,'TaskUnderstandabilityQuestionnaireTwo'])->name('task-understandability-questionnaire-two')->middleware(['preventBackHistory','prolificValidation']);
// Page 10
Route::get('/task-understandability-questionnaire-three',[HomeController::class,'TaskUnderstandabilityQuestionnaireThree'])->name('task-understandability-questionnaire-three')->middleware(['preventBackHistory','prolificValidation']);
// Page 11
Route::get('/task-understandability-questionnaire-four',[HomeController::class,'TaskUnderstandabilityQuestionnaireFour'])->name('task-understandability-questionnaire-four')->middleware(['preventBackHistory','prolificValidation']);
// Page 12
Route::get('/preliminary-period-text',[HomeController::class,'preliminaryPeriodText'])->name('preliminary-period-text')->middleware(['preventBackHistory','prolificValidation']);
// Page 13
Route::get('/preliminary-period',[HomeController::class,'preliminaryPeriod'])->name('preliminary-period')->middleware('timeOut')->middleware(['preventBackHistory','prolificValidation']);
// Route::get('/preliminary-period',[HomeController::class,'preliminaryPeriod'])->name('preliminary-period')->middleware(['preventBackHistory','prolificValidation']);
// Page 14
Route::get('/preliminary-period-result',[HomeController::class,'preliminaryPeriodResult'])->name('preliminary-period-result')->middleware(['preventBackHistory','prolificValidation']);
// Page 15
Route::post('/task-information',[HomeController::class,'taskInformation'])->name('task-information')->middleware(['preventBackHistory','prolificValidation']);
// Page 16
Route::get('/task-understandability-questionnaire-five',[HomeController::class,'TaskUnderstandabilityQuestionnaireFive'])->name('task-understandability-questionnaire-five')->middleware(['preventBackHistory','prolificValidation']);
// Page 17
Route::get('/production-period-text',[HomeController::class,'productionPeriodText'])->name('production-period-text')->middleware(['preventBackHistory','prolificValidation']);
// Page 18
Route::get('/production-period-one',[HomeController::class,'productionPeriodOne'])->name('production-period-one')->middleware('timeOut')->middleware(['preventBackHistory','prolificValidation']);
// Route::get('/production-period-one',[HomeController::class,'productionPeriodOne'])->name('production-period-one')->middleware(['preventBackHistory','prolificValidation']);
// Route::get('/production-one',[HomeController::class,'productionOne'])->name('production-one')->middleware(['preventBackHistory','prolificValidation']);
// Page 19
Route::get('/shortcuts-discovered-in-this-period',[HomeController::class,'shortcutsDiscoveredInThisPeriod'])->name('shortcuts-discovered-in-this-period')->middleware(['preventBackHistory','prolificValidation']);
// Page 20
Route::get('/view-my-answer-sheets',[HomeController::class,'viewMyAnswerSheets'])->name('view-my-answer-sheets')->middleware('timeOut')->middleware(['preventBackHistory','prolificValidation']);
//Route::get('/view-my-answer-sheets',[HomeController::class,'viewMyAnswerSheets'])->name('view-my-answer-sheets')->middleware(['preventBackHistory','prolificValidation']);
// Page 21
Route::get('/production-period-one-result',[HomeController::class,'productionPeriodOneResult'])->name('production-period-one-result')->middleware(['preventBackHistory','prolificValidation']);
// Page 22
Route::post('/production-period-two-text',[HomeController::class,'productionPeriodTwoText'])->name('production-period-two-text')->middleware(['preventBackHistory','prolificValidation']);
// Page
// Route::get('/production-two',[HomeController::class,'productionTwo'])->name('production-one')->middleware(['preventBackHistory','prolificValidation']);
// Page 23
Route::get('/production-period-two',[HomeController::class,'productionPeriodTwo'])->name('production-period-two')->middleware('timeOut')->middleware(['preventBackHistory','prolificValidation']);
// Route::get('/production-period-two',[HomeController::class,'productionPeriodTwo'])->name('production-period-two')->middleware(['preventBackHistory','prolificValidation']);
// Page 24
Route::get('/shortcuts-discovered-in-this-period-two',[HomeController::class,'shortcutsDiscoveredInThisPeriodTwo'])->name('shortcuts-discovered-in-this-period-two')->middleware(['preventBackHistory','prolificValidation']);

// Page 25
Route::get('/view-my-answer-sheets-two',[HomeController::class,'viewMyAnswerSheetsTwo'])->name('view-my-answer-sheets-two')->middleware('timeOut')->middleware(['preventBackHistory','prolificValidation']);
//Route::get('/view-my-answer-sheets-two',[HomeController::class,'viewMyAnswerSheetsTwo'])->name('view-my-answer-sheets-two')->middleware(['preventBackHistory','prolificValidation']);
// Page 26
Route::get('/production-period-two-result',[HomeController::class,'productionPeriodTwoResult'])->name('production-period-two-result')->middleware(['preventBackHistory','prolificValidation']);
// Page 27
Route::post('/introduction-to-phase-two',[HomeController::class,'introductionToPhaseTwo'])->name('introduction-to-phase-two')->middleware(['preventBackHistory','prolificValidation']);
// Page 28
Route::get('/your-role-in-organisation',[HomeController::class,'yourRoleInOrganisation'])->name('your-role-in-organisation')->middleware(['preventBackHistory','prolificValidation']);
// Page 29
Route::get('/your-role-in-organisation-understandability-questionnaire',[HomeController::class,'organisationUnderstandability'])->name('your-role-in-organisation-understandability-questionnaire')->middleware(['preventBackHistory','prolificValidation']);
// Page 30
Route::get('/work-environment',[HomeController::class,'workEnvironment'])->name('work-environment')->middleware(['preventBackHistory','prolificValidation']);
// Page 31
Route::get('/work-environment-understandability-questionnaire',[HomeController::class,'workEnvironmentUnderstandabilityQuestionnaire'])->name('work-environment-understandability-questionnaire')->middleware(['preventBackHistory','prolificValidation']);
// Page 32 A & C
Route::get('/compensation-structure',[HomeController::class,'compensationStructure'])->name('compensation-structure')->middleware(['preventBackHistory','prolificValidation']);
// Page 33 A & C
Route::get('/compensation-structure-understandability-questionnaire',[HomeController::class,'compensationQuestionnaire'])->name('compensation-structure-understandability-questionnaire')->middleware(['preventBackHistory','prolificValidation']);
// Page 34 B & D
Route::get('/compensation-structure-two',[HomeController::class,'compensationStructureTwo'])->name('compensation-structure-two')->middleware(['preventBackHistory','prolificValidation']);
// Page 35 B & D
Route::get('/compensation-structure-understandability-questionnaire-two',[HomeController::class,'compensationQuestionnaireTwo'])->name('compensation-structure-understandability-questionnaire-two')->middleware(['preventBackHistory','prolificValidation']);
// page 36
Route::get('/work-environment-Questionnaire-three',[HomeController::class,'workEnvironmentQuestionnaireThree'])->name('work-environment-Questionnaire-three')->middleware(['preventBackHistory','prolificValidation']);
//page 37
Route::get('/sharing-of-information-with-colleagues',[HomeController::class,'sharingInformColleagues'])->name('sharing-of-information-with-colleagues')->middleware(['preventBackHistory','prolificValidation']);
//page 38
Route::get('/sharing-of-information-with-colleagues-Understandability-Questionnaire',[HomeController::class,'sharingUnderstandabilityQ'])->name('sharing-of-information-with-colleagues-Understandability-Questionnaire')->middleware(['preventBackHistory','prolificValidation']);
//page 39 A & B
Route::get('/options_to_share_information_with_colleagues_two',[HomeController::class,'optionsToShareInformationWithColleagues'])->name('options_to_share_information_with_colleagues_two')->middleware(['preventBackHistory','prolificValidation']);
//page 40 A & B
Route::get('/sharing_of_information_with_colleagues_understandability_questionnaire',[HomeController::class, 'Sharing_of_information_Questionnaire_two'])->name('sharing_of_information_with_colleaguesUnderstandability_Questionnaire2')->middleware(['preventBackHistory','prolificValidation']);
//page 41 A & B
Route::get('/sharing_of_information_with_colleagues_Understandability_Questionnaire_four',[HomeController::class, 'SharingofolleaguesUnderstandabilityQuestionnaireFour'])->name('sharing_of_information_with_colleagues_Understandability_Questionnaire_four')->middleware(['preventBackHistory','prolificValidation']);
//page 42 C & D
Route::get('/options_to_share_information_with_colleagues_four',[HomeController::class, 'OptionstoshareinformationwithcolleaguesFour'])->name('options_to_share_information_with_colleagues_four')->middleware(['preventBackHistory','prolificValidation']);
// page 43 C & D
Route::get('/Sharing_of_information_with_colleagues_Understandability_Questionnaire_five',[HomeController::class, 'Sharingofinformationfive'])->name('Sharing_of_informationQuestionnaire_five')->middleware(['preventBackHistory','prolificValidation']);
//page 44 C & D
Route::get('/Sharing_of_information_with_colleagues_Understandability_Questionnaire_six',[HomeController::class, 'Sharingofinformationsix'])->name('Sharing_of_information_with_colleagues_Understandability_Questionnaire_six')->middleware(['preventBackHistory','prolificValidation']);
//page 45 A & B
Route::get('/Post_experimental_questionnaire',[HomeController::class, 'PostexperimentalquestionnaireOne'])->name('Post_experimental_questionnaire_one')->middleware(['preventBackHistory','prolificValidation']);
//page 46 C & D
Route::get('/Post_experimental_questionnaire_two',[HomeController::class, 'PostexperimentalquestionnaireTwo'])->name('Post_experimental_questionnaire_two')->middleware(['preventBackHistory','prolificValidation']);
//page 47 C & D
Route::get('/Post_experimental_questionnaire_three', [HomeController::class, 'PostexperimentalquestionnaireThree'])->name('Post_experimental_questionnaire_three')->middleware(['preventBackHistory','prolificValidation']);

// new page 45
Route::get('page-forty-five',[HomeControllerThree::class, 'page_forty_five'])->name('page-forty-five')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-forty-five-save',[HomeControllerThree::class, 'page_forty_five_save'])->name('page-forty-five-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 46
Route::get('page-forty-six',[HomeControllerThree::class, 'page_forty_six'])->name('page-forty-six')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-forty-six-save',[HomeControllerThree::class, 'page_forty_six_save'])->name('page-forty-six-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 47
Route::get('page-forty-seven',[HomeControllerThree::class, 'page_forty_seven'])->name('page-forty-seven')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-forty-seven-save',[HomeControllerThree::class, 'page_forty_seven_save'])->name('page-forty-seven-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 48
Route::get('page-forty-eight',[HomeControllerThree::class, 'page_forty_eight'])->name('page-forty-eight')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-forty-eight-save',[HomeControllerThree::class, 'page_forty_eight_save'])->name('page-forty-eight-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 49
Route::get('page-forty-nine',[HomeControllerThree::class, 'page_forty_nine'])->name('page-forty-nine')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-forty-nine-save',[HomeControllerThree::class, 'page_forty_nine_save'])->name('page-forty-nine-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 50
Route::get('page-fifty',[HomeControllerThree::class, 'page_fifty'])->name('page-fifty')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-save',[HomeControllerThree::class, 'page_fifty_save'])->name('page-fifty-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 51
Route::get('page-fifty-one',[HomeControllerThree::class, 'page_fifty_one'])->name('page-fifty-one')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-one-save',[HomeControllerThree::class, 'page_fifty_one_save'])->name('page-fifty-one-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 52
Route::get('page-fifty-two',[HomeControllerThree::class, 'page_fifty_two'])->name('page-fifty-two')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-two-save',[HomeControllerThree::class, 'page_fifty_two_save'])->name('page-fifty-two-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 53 A & B
Route::get('page-fifty-three',[HomeControllerThree::class, 'page_fifty_three'])->name('page-fifty-three')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-three-save',[HomeControllerThree::class, 'page_fifty_three_save'])->name('page-fifty-three-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 54 C & D
Route::get('page-fifty-four',[HomeControllerThree::class, 'page_fifty_four'])->name('page-fifty-four')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-four-save',[HomeControllerThree::class, 'page_fifty_four_save'])->name('page-fifty-four-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 55
Route::get('page-fifty-five',[HomeControllerThree::class, 'page_fifty_five'])->name('page-fifty-five')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-five-save',[HomeControllerThree::class, 'page_fifty_five_save'])->name('page-fifty-five-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 56
Route::get('page-fifty-six',[HomeControllerThree::class, 'page_fifty_six'])->name('page-fifty-six')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-six-save',[HomeControllerThree::class, 'page_fifty_six_save'])->name('page-fifty-six-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 57 B & D
Route::get('page-fifty-seven',[HomeControllerThree::class, 'page_fifty_seven'])->name('page-fifty-seven')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-seven-save',[HomeControllerThree::class, 'page_fifty_seven_save'])->name('page-fifty-seven-save')->middleware(['preventBackHistory','prolificValidation']);
// new page 58
Route::get('page-fifty-eight',[HomeControllerThree::class, 'page_fifty_eight'])->name('page-fifty-eight')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-eight-save',[HomeControllerThree::class, 'page_fifty_eight_save'])->name('page-fifty-eight-save')->middleware(['preventBackHistory','prolificValidation']);

// new page 59
Route::get('page-fifty-nine',[HomeControllerThree::class, 'page_fifty_nine'])->name('page-fifty-nine')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-fifty-nine-save',[HomeControllerThree::class, 'page_fifty_nine_save'])->name('page-fifty-nine-save')->middleware(['preventBackHistory','prolificValidation']);

// new page 60
Route::get('page-sixty',[HomeControllerThree::class, 'page_sixty'])->name('page-sixty')->middleware(['preventBackHistory','prolificValidation']);
Route::post('page-sixty-save',[HomeControllerThree::class, 'page_sixty_save'])->name('page-sixty-save')->middleware(['preventBackHistory','prolificValidation']);

// new page 61
Route::get('page-sixty-one',[HomeControllerThree::class, 'page_sixty_one'])->name('page-sixty-one')->middleware(['preventBackHistory','prolificValidation']);

Route::post('page-sixty-one-save',[HomeControllerThree::class, 'page_sixty_one_save'])->name('page-sixty-one-save')->middleware(['preventBackHistory','prolificValidation']);


Route::post('save-payment-info',[ParticipantPaymentController::class,'store'])->name('save-payment-info');

// answer route
Route::get('/check-anwser/{period}/{pageNumber}/{boxNumber}/{value}',[AnswerController::class,'chackAnswer'])->name('chack-answer')->middleware(['preventBackHistory','prolificValidation']);
// Page
Route::post('/page-wish-answer-save',[AnswerController::class,'pageWishAnswer'])->name('page-wish-answer-save')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/shortcuts-discovered',[AnswerController::class,'shortcutsDiscovered'])->name('shortcuts-discovered')->middleware(['preventBackHistory','prolificValidation']);
// Page
Route::post('/save-final-answer',[AnswerController::class,'saveFinalAns'])->name('save-final-answer')->middleware(['preventBackHistory','prolificValidation']);
// Page
Route::post('/stage-two-answer',[AnswerController::class,'stageTwoAnswer'])->name('stage-two-answer')->middleware(['preventBackHistory','prolificValidation']);

// task information answer
Route::post('/task-information-answer',[AnswerController::class,'taskInfoAns'])->name('task-information-answer')->middleware(['preventBackHistory','prolificValidation']);
// your role in organisation
Route::post('/your-role-in-organisation',[AnswerController::class, 'yourRoleInOrg'])->name('your-role-in-organisation')->middleware(['preventBackHistory','prolificValidation']);
// Work environment
Route::post('/work-environment-ans',[AnswerController::class, 'workEnvironmentAns'])->name('work-environment-ans')->middleware(['preventBackHistory','prolificValidation']);
// workEnvironmentAnsFinal
Route::post('/work-environment-ans-final',[AnswerController::class, 'workEnvironmentAnsFinal'])->name('work-environment-ans-final')->middleware(['preventBackHistory','prolificValidation']);
//compensation-structure answer
Route::post('/compensation-structure-ans',[AnswerController::class, 'compensationStructureAns'])->name('compensation-structure-ans')->middleware(['preventBackHistory','prolificValidation']);
// sharingInformationAns
Route::post('/sharing-information-ans',[AnswerController::class, 'sharingInformationAns'])->name('sharing-information-ans')->middleware(['preventBackHistory','prolificValidation']);
// sharing-information-with-colleagues-ans
Route::post('/sharing-information-with-colleagues-ans',[AnswerController::class, 'sharingInformationWithColAns'])->name('sharing-information-with-colleagues-ans')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/sharing-information-with-colleagues-ans-final',[AnswerController::class, 'sharingInformationWithColAnsFinal'])->name('sharing-information-with-colleagues-ans-final')->middleware(['preventBackHistory','prolificValidation']);

// post experimental
Route::post('/post-experimental-main-one',[AnswerController::class, 'postExpMainOne'])->name('post-experimental-main-one')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-main-two',[AnswerController::class, 'postExpMainTwo'])->name('post-experimental-main-two')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-main-three',[AnswerController::class, 'postExpMainThree'])->name('post-experimental-main-three')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-one',[AnswerController::class, 'postExpStepOne'])->name('post-experimental-step-one')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-two',[AnswerController::class, 'postExpStepTwo'])->name('post-experimental-step-two')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-three',[AnswerController::class, 'postExpStepThree'])->name('post-experimental-step-three')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-four',[AnswerController::class, 'postExpStepFour'])->name('post-experimental-step-four')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-five',[AnswerController::class, 'postExpStepFive'])->name('post-experimental-step-five')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-six',[AnswerController::class, 'postExpStepSix'])->name('post-experimental-step-six')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-seven',[AnswerController::class, 'postExpStepSeven'])->name('post-experimental-step-seven')->middleware(['preventBackHistory','prolificValidation']);
Route::post('/post-experimental-step-eight',[AnswerController::class, 'postExpStepEight'])->name('post-experimental-step-eight')->middleware(['preventBackHistory','prolificValidation']);

// payout
Route::get('payout',[HomeControllerThree::class, 'payout'])->name('payout')->middleware(['preventBackHistory','prolificValidation']);
Route::get('end-experiment',[HomeControllerThree::class, 'end_experiment'])->name('end-experiment')->middleware(['preventBackHistory','prolificValidation']);
Route::get('experiment-wrong',[HomeControllerThree::class, 'wrongExperiment'])->name('wrong-experiment')->middleware('preventBackHistory');
Route::get('out-from-prolific',[HomeControllerThree::class, 'fromProlific'])->name('out-from-prolific')->middleware('preventBackHistory');
// Route::get('Thank_you',[HomeControllerTwo::class, 'Thanks'])->name('Thanks_you')->middleware(['preventBackHistory','prolificValidation']);



// TimeUpSession Route
Route::post('/time_Up',[OthersController::class,'TimeManagementSystem'])->middleware(['preventBackHistory','prolificValidation']);

require __DIR__.'/auth.php';
