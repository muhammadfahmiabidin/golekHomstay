<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class Dropdown extends Controller
{
    // homestay in index
    public function typeOfHomestay($list){
        $propertyType = DB::table('tblpropertycat')->get();
        $city=DB::table('tblcity')->get();
        $priceRange=DB::table('tblprice')->get();
        $timeRange=DB::table('tbltimerange')->get();

        $data = DB::table('tblproperty')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblproperty.cityID')
        ->join('tblarea', 'tblarea.areaID', '=', 'tblcity.areaID')
        ->join('tblprice', 'tblprice.priceID', '=', 'tblproperty.priceID')
        ->join('tbltimerange', 'tbltimerange.timerangeID', '=', 'tblproperty.timerangeID')
        ->where('categoryID', $list)
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
            'data5'=>$timeRange
            ]);
    }

    // homestay
    public function typeOfCity($list){
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
        ->where('tblproperty.cityID', $list)
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
            'data5'=>$timeRange
            ]);
    }
    public function typeOfPriceRange($list){
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
        ->where('tblproperty.priceID', $list)
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
            'data5'=>$timeRange
            ]);
    }
    public function typeOfTimeRange($list){
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
        ->where('tblproperty.timerangeID', $list)
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
            'data5'=>$timeRange
            ]);
    }


    // job
    public function typeOfCityJob($list){
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
        ->join('tblmap','tblmap.mapID', '=', 'tbljob.mapID')
        ->where('tbljob.cityID', $list)
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($data as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }
        return view('Job', [
            'data1'=>$jobType,
            'data2'=> $city,
            'data3'=>$educationLevel,
            'data4'=>$jobField,
            'data5'=>$salary
            ]);
    }


    public function typeOfJob($job){

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
        ->where('tbljob.jobtypeID', $list)
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($data as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }
        return view('Job', [
            'data1'=>$jobType,
            'data2'=> $city,
            'data3'=>$educationLevel,
            'data4'=>$jobField,
            'data5'=>$salary
            ]);
    }
    
    public function typeOfEducationJob($list){
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
        ->join('tblmap','tblmap.mapID', '=', 'tbljob.mapID')
        ->where('tbljob.educationID', $list)
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($data as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }
        return view('Job', [
            'data'=>$jobType,
            'data2'=> $city,
            'data3'=>$educationLevel,
            'data4'=>$jobField,
            'data5'=>$salary
            ]);
    }
    public function typeOfFieldJob($list){
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
        ->join('tblmap','tblmap.mapID', '=', 'tbljob.mapID')
        ->where('tbljob.jobfieldID', $list)
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($data as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }
        return view('Job', [
            'data'=>$jobType,
            'data2'=> $city,
            'data3'=>$educationLevel,
            'data4'=>$jobField,
            'data5'=>$salary
            ]);
    }
    public function typeOfSalaryJob($list){
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
        ->join('tblmap','tblmap.mapID', '=', 'tbljob.mapID')
        ->where('tbljob.jobSalaryID', $list)
        ->get();

        Mapper::map(-3.1977178, 112.6041526, ['zoom' => 4, 'fullscreenControl' => false, 'center' => true, 'marker' => false, 'cluster' => true, 'clusters' => ['center' => false, 'zoom' => 15, 'size'=> 4], 'language' => 'en']);
        foreach($data as $markerMap){
            Mapper::marker($markerMap->mapLongitude, $markerMap->mapLatitude);
        }
        return view('Job', [
            'data'=>$jobType,
            'data2'=> $city,
            'data3'=>$educationLevel,
            'data4'=>$jobField,
            'data5'=>$salary
            ]);
    }

    // vacation
    public function typeOfVacay($list){

        $Type = DB::table('tblvacaycat')->get();
        $city=DB::table('tblcity')->get();

        $datavacay = DB::table('tblvacay')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblvacay.cityID')
        ->join('tblmap','tblmap.mapID', '=', 'tblvacay.mapID')
        ->join('tblvacaycat','tblvacaycat.categoryID', '=', 'tblvacay.categoryID')
        ->where('tblvacay.categoryID', $list)
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

    public function typeOfCityVacay($list){

        $Type = DB::table('tblvacaycat')->get();
        $city=DB::table('tblcity')->get();

        $datavacay = DB::table('tblvacay')
        ->join('tblcity', 'tblcity.cityID', '=', 'tblvacay.cityID')
        ->join('tblmap','tblmap.mapID', '=', 'tblvacay.mapID')
        ->join('tblvacaycat','tblvacaycat.categoryID', '=', 'tblvacay.categoryID')
        ->where('tblvacay.cityID', $list)
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
}
