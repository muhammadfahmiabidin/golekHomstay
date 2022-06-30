<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class MapController extends Controller
{
    // index Homestay (nearest campus)
    public function indexHomestay($campus){
       
        $propertyType = DB::table('tblpropertycat')->get();
        $city=DB::table('tblcity')->get();
        $priceRange=DB::table('tblprice')->get();
        $timeRange=DB::table('tbltimerange')->get();

        $data = DB::table('tblproperty')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblproperty.cityID')
        ->join('tblarea', 'tblarea.areaID', '=', 'tblcity.areaID')
        ->join('tblprice', 'tblprice.priceID', '=', 'tblproperty.priceID')
        ->join('tbltimerange', 'tbltimerange.timerangeID', '=', 'tblproperty.timerangeID')
        ->join('tblmap', 'tblmap.mapID', '=', 'tblproperty.mapID')
        ->where('areaName', 'like', '%'.$campus.'%')
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($data as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }
        
        return view('homestayMenus', [
            'data'=>$data,
            'data2'=> $propertyType,
            'data3'=>$city,
            'data4'=>$priceRange,
            'data5'=>$timeRange,
            ]);
    }



    // index of job
    public function job($job){

        $jobType = DB::table('tbljobtype')->get();
        $city=DB::table('tblcity')->get();
        $educationLevel=DB::table('tbljobeducation')->get();
        $jobField=DB::table('tbljobfield')->get();
        $salary=DB::table('tbljobsalary')->get();

        $dataJob = DB::table('tbljob')
        ->join('tbljobsalary', 'tbljobsalary.jobSalaryID', '=', 'tbljob.jobSalaryID')
        ->join('tblcity', 'tblcity.cityID', '=', 'tbljob.cityID')
        ->join('tbljobtype', 'tbljobtype.jobtypeID', '=', 'tbljob.jobtypeID')
        ->join('tbljobeducation', 'tbljobeducation.educationID', '=', 'tbljob.educationID')
        ->join('tbljobfield', 'tbljobfield.jobfieldID', '=', 'tbljob.jobfieldID')
        ->join('tblmap','tblmap.mapID', '=', 'tbljob.mapID')
        ->where('cityName', 'like', '%'.$job.'%')
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($data as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }

        return view('Job', [
            'data'=>$dataJob,
            'data1'=>$jobType,
            'data2'=>$city,
            'data3'=>$educationLevel,
            'data4'=>$jobField,
            'data5'=>$salary
            ]);
    }


    // index of Tourism
    public function vacation($vacay){

        $Type = DB::table('tblvacaycat')->get();
        $city=DB::table('tblcity')->get();

        $datavacay = DB::table('tblvacay')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblvacay.cityID')
        ->join('tblmap','tblmap.mapID', '=', 'tblvacay.mapID')
        ->join('tblvacaycat','tblvacaycat.categoryID', '=', 'tblvacay.categoryID')
        ->where('cityName', 'like', '%'.$vacay.'%')
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($datavacay as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }

        return view('Tourism', [
            'data'=>$Type,
            'data2'=>$city
            ]);
    }



    // view of homestay
    public function detailHomestay($id){
        $data = DB::table('tblproperty')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblproperty.cityID')
        ->join('tblarea', 'tblarea.areaID', '=', 'tblcity.areaID')
        ->join('tblprice', 'tblprice.priceID', '=', 'tblproperty.priceID')
        ->join('tbltimerange', 'tbltimerange.timerangeID', '=', 'tblproperty.timerangeID')
        ->where('propertyID', $id)
        ->get();
        return view('viewhomestay', ['data'=>$data]);
    }



        // view of job
        public function detailJob($id){
            $dataJob = DB::table('tbljob')
            ->join('tbljobsalary', 'tbljobsalary.jobSalaryID', '=', 'tbljob.jobSalaryID')
            ->join('tblcity', 'tblcity.cityID', '=', 'tbljob.cityID')
            ->join('tbljobtype', 'tbljobtype.jobtypeID', '=', 'tbljob.jobtypeID')
            ->join('tbljobeducation', 'tbljobeducation.educationID', '=', 'tbljob.educationID')
            ->join('tbljobfield', 'tbljobfield.jobfieldID', '=', 'tbljob.jobfield')
            ->where('jobID', $id)
            ->get();
            return view('Job', ['data'=>$dataJob]);
        }


        // detile vacay
        public function detailvacay($vacay){

            $Type = DB::table('tblvacaycat')->get();
            $city=DB::table('tblcity')->get();
    
            $datavacay = DB::table('tblvacay')
            ->join('tblcity', 'tblcity.cityID', '=', 'tblvacay.cityID')
            ->join('tblmap','tblmap.mapID', '=', 'tblvacay.mapID')
            ->join('tblvacaycat','tblvacaycat.categoryID', '=', 'tblvacay.categoryID')
            ->where('vacayID', $vacay)
            ->get();
            return view('Tourism', ['data'=>$type]);
        }



    // dropdown of homestay
    public function listHomestay(){
        $propertyType = DB::table('tblpropertycat')->get();
        $city=DB::table('tblcity')->get();
        $priceRange=DB::table('tblprice')->get();
        $timeRange=DB::table('tbltimerange')->get();

        $data = DB::table('tblproperty')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblproperty.cityID')
        ->join('tblarea', 'tblarea.areaID', '=', 'tblcity.areaID')
        ->join('tblprice', 'tblprice.priceID', '=', 'tblproperty.priceID')
        ->join('tbltimerange', 'tbltimerange.timerangeID', '=', 'tblproperty.timerangeID')
        ->get();
        
        return view('homestayMenus', [
            'data'=>$data,
            'data2'=>$propertyType,
            'data3'=>$city,
            'data4'=>$priceRange,
            'data5'=>$timeRange
            ]);
    }



    // dropdrown of job
    public function listJob(){
        $jobType = DB::table('tbljobtype')->get();
        $city=DB::table('tblcity')->get();
        $educationLevel=DB::table('tbljobeducation')->get();
        $jobField=DB::table('tbljobfield')->get();
        $salary=DB::table('tbljobsalary')->get();

        $data = DB::table('tbljob')
        ->join('tbljobsalary', 'tbljobsalary.jobSalaryID', '=', 'tbljob.jobSalaryID')
        ->join('tblcity', 'tblcity.cityID', '=', 'tbljob.cityID')
        ->join('tbljobtype', 'tbljobtype.jobtypeID', '=', 'tbljob.jobtypeID')
        ->join('tbljobeducation', 'tbljobeducation.educationID', '=', 'tbljob.educationID')
        ->join('tbljobfield', 'tbljobfield.jobfieldID', '=', 'tbljob.jobfieldID')
        ->get();

        return view('Job', [
            'data'=>$data,
            'data1'=>$jobType,
            'data2'=>$city,
            'data3'=>$educationLevel,
            'data4'=>$jobField,
            'data5'=>$salary
            ]);
    }

// list vacay
    public function listVacay(){

        $Type = DB::table('tblvacaycat')->get();
        $city=DB::table('tblcity')->get();

        $datavacay = DB::table('tblvacay')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblvacay.cityID')
        ->join('tblmap','tblmap.mapID', '=', 'tblvacay.mapID')
        ->join('tblvacaycat','tblvacaycat.categoryID', '=', 'tblvacay.categoryID')
        ->get();

        return view('Tourism', [
            'data'=>$Type,
            'data2'=>$city
            ]);
    }

}
