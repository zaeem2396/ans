<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Certificate;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Saudi Routes
Route::group(['prefix' => 'sa'], function () {
    
    // -----------------------------------Static routes-------------------------------------
    Route::get('/', [Certificate::class, 'index']);
    Route::get('/Quality-Policy', [Certificate::class, 'qualityPolicy']);
    Route::get('/Contact', [Certificate::class, 'contact']);
    Route::get('/Check-Status', [Certificate::class, 'chkStatus']);
    Route::get('/Appeal-Handling-Process', [Certificate::class, 'appeal_handling_process']);
    Route::get('/Complaint-Handling-Process', [Certificate::class, 'complaint_handling_process']);
    Route::post('/getAppData',[Certificate::class,'getAppData']);
    Route::get('/certification-mark-guidelines', [Certificate::class,'certification_mark_guidelines']);
    Route::get('/impartiality-policy', [Certificate::class,'impartiality_policy']);
    Route::get('/customer-feedback', [Certificate::class,'customer_feedback']);
    Route::get('/apply-for-certification', [Certificate::class,'apply_for_certification']);
    Route::get('/apply-for-training', [Certificate::class,'apply_for_training']);
    Route::post('/submitFeedback', [Certificate::class,'submitFeedback']);
    Route::post('/applyForCertification', [Certificate::class,'applyForCertification']);
    Route::post('/applyForTraining', [Certificate::class,'applyForTraining']);
    Route::post('contactUs', [Certificate::class, 'contactUs']);
    Route::get('/verify-training-certificate', [Certificate::class, 'verifyTrainingCertificate']);
    Route::post('/getCandidateCertificateData', [Certificate::class, 'getCandidateCertificate']);
    Route::get('/professional-training-and-certification', [Certificate::class, 'professionalTrainingAndCertification']);
    Route::get('/professional-development-programs', [Certificate::class, 'professionalDevelopmentPrograms']);
    Route::get('/training-services-offered', [Certificate::class, 'trainingServicesOffered']);
    Route::get('/management-system-certification', [Certificate::class, 'managementSystemCertification']);
    Route::get('/integrated-management-system', [Certificate::class, 'integratedManagementSystem']);
    Route::get('/iso-certification-in-dammam', [Certificate::class, 'dammam']);
    Route::get('/iso-certification-in-makkah', [Certificate::class, 'makkah']);
    Route::get('/iso-certification-in-jubail', [Certificate::class, 'jubail']);
    Route::get('/iso-certification-in-jeddah', [Certificate::class, 'jeddah']);
    Route::get('/iso-certification-in-buraydah', [Certificate::class, 'buraydah']);
    Route::get('/iso-certification-in-hofuf', [Certificate::class, 'hofuf']);
    Route::get('/iso-certification-in-medina', [Certificate::class, 'medina']);
    Route::get('/iso-certification-in-yanbu', [Certificate::class, 'yanbu']);
    // -----------------------------------Dynamic routes-------------------------------------
    Route::get('/{name}', [Certificate::class, 'certificate']);
});


// Default Routes 
// -----------------------------------Static routes-------------------------------------
Route::get('/', [Certificate::class, 'index']);
Route::get('/Quality-Policy', [Certificate::class, 'qualityPolicy']);
Route::get('/Contact', [Certificate::class, 'contact']);
Route::get('/Check-Status', [Certificate::class, 'chkStatus']);
Route::get('/Appeal-Handling-Process', [Certificate::class, 'appeal_handling_process']);
Route::get('/Complaint-Handling-Process', [Certificate::class, 'complaint_handling_process']);
Route::post('/getAppData',[Certificate::class,'getAppData']);
Route::get('/home/certification-mark-guidelines', [Certificate::class,'certification_mark_guidelines']);
Route::get('/impartiality-policy', [Certificate::class,'impartiality_policy']);
Route::get('/customer-feedback', [Certificate::class,'customer_feedback']);
Route::get('/apply-for-certification', [Certificate::class,'apply_for_certification']);
Route::get('/apply-for-training', [Certificate::class,'apply_for_training']);
Route::post('/submitFeedback', [Certificate::class,'submitFeedback']);
Route::post('/applyForCertification', [Certificate::class,'applyForCertification']);
Route::post('/applyForTraining', [Certificate::class,'applyForTraining']);
Route::post('contactUs', [Certificate::class, 'contactUs']);
Route::get('/verify-training-certificate', [Certificate::class, 'verifyTrainingCertificate']);
Route::post('/getCandidateCertificateData', [Certificate::class, 'getCandidateCertificate']);
Route::get('/professional-training-and-certification', [Certificate::class, 'professionalTrainingAndCertification']);
Route::get('/professional-development-programs', [Certificate::class, 'professionalDevelopmentPrograms']);
Route::get('/training-services-offered', [Certificate::class, 'trainingServicesOffered']);
Route::get('/management-system-certification', [Certificate::class, 'managementSystemCertification']);
Route::get('/integrated-management-system', [Certificate::class, 'integratedManagementSystem']);
Route::get('/iso-certification-in-dammam', [Certificate::class, 'dammam']);
Route::get('/iso-certification-in-makkah', [Certificate::class, 'makkah']);
Route::get('/iso-certification-in-jubail', [Certificate::class, 'jubail']);
Route::get('/iso-certification-in-jeddah', [Certificate::class, 'jeddah']);
Route::get('/iso-certification-in-buraydah', [Certificate::class, 'buraydah']);
Route::get('/iso-certification-in-hofuf', [Certificate::class, 'hofuf']);
Route::get('/iso-certification-in-medina', [Certificate::class, 'medina']);
Route::get('/iso-certification-in-yanbu', [Certificate::class, 'yanbu']);
Route::get('/sitemap.xml', function () { return response()->file(public_path('sitemap.xml')); });
// -----------------------------------Dynamic routes-------------------------------------
Route::get('/{name}', [Certificate::class, 'certificate']);


// Admin routes 
// Route::get('/auth', function () { return 'Unauthorized'; });
Route::get('/super/auth', [Admin::class, 'index']);
Route::post('/super/chkAuth', [Admin::class, 'auth']);
Route::get('/super/Dashboard', [Admin::class, 'dashboard']);
Route::get('/super/Add-Standard', [Admin::class, 'addStd']);
Route::post('/super/uploadStd', [Admin::class, 'uploadStd']);
Route::get('/super/Add-application', [Admin::class, 'addApp']);
Route::post('/super/addApplication', [Admin::class, 'addApplication']);
Route::get('/super/View-Application', [Admin::class, 'getAppData']);
Route::get('/super/App-edit/{id}', [Admin::class, 'getSingleAppData']);
Route::post('/super/editApp', [Admin::class, 'editApp']);
Route::post('/super/deleteApp', [Admin::class, 'deleteRecord']);
Route::get('/super/Cert-edit/{id}', [Admin::class, 'getSingleCert']);
Route::post('/super/editStd', [Admin::class, 'editCert']);
Route::post('/super/deleteCert',[Admin::class,'deleteCert']);
Route::get('/super/certification-enquiry', [Admin::class, 'certificationEnquiry']);
Route::get('/super/training-enquiry', [Admin::class, 'trainingEnquiry']);
Route::get('/super/contact-enquiry', [Admin::class, 'contactEnquiry']);
Route::get('/super/customer-feedback', [Admin::class, 'feedback']);
Route::get('/super/trainng-Standard', [Admin::class, 'training']);
Route::post('/super/addtraining', [Admin::class, 'addtraining']);
Route::post('/super/deleteTraining', [Admin::class, 'deleteTraining']);
Route::get('/super/trainng-certificates', [Admin::class, 'trainingCertificates']);
Route::post('/super/addCadidateTrainingCertificates', [Admin::class, 'addCadidateTrainingCertificates']);
Route::get('/super/manage-training-certificates', [Admin::class, 'mamageTrainngCertificates']);
Route::post('/super/disableCandidateCertificate', [Admin::class, 'disableCandidateCertificate']);
