<?php

namespace App\Http\Controllers;

use App\ChangeWeight;
use App\Feeding;
use App\Food;
use App\FoodAllergy;
use App\FrequencyConsumption;
use App\LifeStyle;
use App\Patient;
use App\SpecificDiet;
use Auth;
use DB;
use Illuminate\Http\Request;

class NutritionalClinicalHistoryController extends Controller
{
    public function create($slug)
    {
    	$patient = Patient::where('slug', $slug)->first();

    	$user = Auth::user();

    	return view('patients.NutritionalClinicalHistory.create', compact('patient', 'user'));
    }

    public function edit($slug)
    {
    	$patient = Patient::where('slug', $slug)->first();

    	$user = Auth::user();

    	return view('patients.NutritionalClinicalHistory.edit', compact('patient', 'user'));
    }

    public function update(Request $request, $slug)
    {
    	$patient = Patient::where('slug', $slug)->first();

    	try{
    		DB::beginTransaction();

    		//Estilo de Vida
    		$patient->LifeStyle->details = $request->physical_activities;
    		$patient->LifeStyle->stress = $request->stress;
    		$patient->LifeStyle->save();
    		//Alimentación
    		$patient->Feeding->salad = $request->salad;
    		$patient->Feeding->red_meat = $request->red_meat;
    		$patient->Feeding->fish = $request->fish;
    		$patient->Feeding->soup = $request->soup;
    		$patient->Feeding->pasta = $request->pasta;
    		$patient->Feeding->vegetable = $request->vegetable;
    		$patient->Feeding->fruit = $request->fruit;
    		$patient->Feeding->vegetarian = $request->vegetarian;
    		$patient->Feeding->vegan = $request->vegan;
    		$patient->Feeding->bird = $request->bird;
    		$patient->Feeding->pork = $request->pork;
    		$patient->Feeding->mexican = $request->mexican;
    		$patient->Feeding->shellfish = $request->shellfish;
    		$patient->Feeding->food_not_prefer = $request->food_not_prefer;
    		$patient->Feeding->alimentary_habits = $request->alimentary_habits;
    		$patient->Feeding->food_belief = $request->food_belief;
    		$patient->Feeding->save();

    		//Dieta específica
    		$patient->SpecificDiet->diet_salad = $request->diet_salad;
    		$patient->SpecificDiet->diet_vegan = $request->diet_vegan;
    		$patient->SpecificDiet->diet_crudiverian = $request->diet_crudiverian;
    		$patient->SpecificDiet->diet_ovegetarian = $request->diet_ovegetarian;
    		$patient->SpecificDiet->diet_ovolactovegetarian = $request->diet_ovolactovegetarian;
    		$patient->SpecificDiet->diet_mediterranean = $request->diet_mediterranean;
    		$patient->SpecificDiet->other = $request->other;
    		$patient->SpecificDiet->vitamins = $request->vitamins;
    		$patient->SpecificDiet->proteins = $request->proteins;
    		$patient->SpecificDiet->aminoacids = $request->aminoacids;
    		$patient->SpecificDiet->none = $request->none;
    		$patient->SpecificDiet->save();

    		//Alergias alimentarias

    		$patient->FoodAllergy->oilseed_allergy = $request->oilseed_allergy;
    		$patient->FoodAllergy->fruit_allergy = $request->fruit_allergy;
    		$patient->FoodAllergy->vegetable_allergy = $request->vegetable_allergy;
    		$patient->FoodAllergy->intolerance = $request->intolerance;
    		$patient->FoodAllergy->save();

    		//Cambios de peso

    		$patient->ChangeWeight->max_weight = $request->max_weight;
    		$patient->ChangeWeight->min_weight = $request->min_weight;
    		$patient->ChangeWeight->usual_weight = $request->usual_weight;
    		$patient->ChangeWeight->lastMonth = $request->lastMonth;
    		$patient->ChangeWeight->lastThreeMonths = $request->lastThreeMonths;
    		$patient->ChangeWeight->lastSixMonths = $request->lastSixMonths;
    		$patient->ChangeWeight->save();

    		DB::commit();

    		return redirect()->route('ClinicHistoryPatient', $patient->slug)->with('success', 'Datos actualizados correctamente.');

    	}catch(\Exception $e){ 
    			return back()->with('info', $e->getmessage());
    		}
    }

    public function store(Request $request, $slug)
    {
    	$patient = Patient::where('slug', $slug)->first();

    	try{ DB::beginTransaction(); 

    		//Estilo de vida
    		LifeStyle::create([
    			'patient_id' => $patient->id,
    			'details' => $request->physical_activities,
    			'stress' => $request->stress
    		]);

    		//Alimentación
    		Feeding::create([
    			'patient_id' => $patient->id,
    			'salad' => $request->salad,
    			'red_meat' => $request->red_meat,
    			'red_meat' => $request->red_meat,
    			'soup' => $request->soup,
    			'soup' => $request->soup,
    			'pasta' => $request->pasta,
    			'vegetable' => $request->vegetable,
    			'vegetarian' => $request->vegetarian,
    			'vegan' => $request->vegan,
    			'bird' => $request->bird,
    			'pork' => $request->pork,
    			'mexican' => $request->mexican,
    			'shellfish' => $request->shellfish,
    			'food_not_prefer' => $request->food_not_prefer,
    			'alimentary_habits' => $request->alimentary_habits,
    			'food_belief' => $request->food_belief,
    		]);

    		//Dieta especifica
    		SpecificDiet::create([
    			'patient_id' => $patient->id,
    			'diet_salad' => $request->diet_salad,
    			'diet_vegan' => $request->diet_vegan,
    			'diet_crudiverian' => $request->diet_crudiverian,
    			'diet_ovegetarian' => $request->diet_ovegetarian,
    			'diet_ovolactovegetarian' => $request->diet_ovolactovegetarian,
    			'diet_mediterranean' => $request->diet_mediterranean,
    			'other' => $request->other,
    			'water' => $request->water,
    			'vitamins' => $request->vitamins,
    			'proteins' => $request->proteins,
    			'aminoacids' => $request->aminoacids,
    			'none' => $request->none
    		]);

    		FoodAllergy::create([
    			'patient_id' => $patient->id,
    			'oilseed_allergy' => $request->oilseed_allergy,
    			'fruit_allergy' => $request->fruit_allergy,
    			'vegetable_allergy' => $request->vegetable_allergy,
    			'intolerance' => $request->intolerance
    		]);

    		ChangeWeight::create([
    			'patient_id' => $patient->id,
    			'max_weight' => $request->max_weight,
    			'min_weight' => $request->min_weight,
    			'usual_weight' => $request->usual_weight,
    			'lastMonth' => $request->lastMonth,
    			'lastThreeMonths' => $request->lastThreeMonths,
    			'lastSixMonths' => $request->lastSixMonths
    		]);

    		DB::commit();

    		return redirect()->route('NutritionalClinicalHistory.frequency', $patient->slug)->with('success', 'Registros guardado correctamente, ahora ingrese su frecuencia de consumo');

    		}catch(\Exception $e){ 
    			return back()->with('info', $e->getmessage());
    		}
    }

    public function frequencyConsumptionCreate($slug)
    {
        $patient = Patient::where('slug', $slug)->first();

        $user = Auth::user();

        $foods = Food::all();

        $frequency = FrequencyConsumption::where('patient_id', $patient->id)->get();

        return view('patients.NutritionalClinicalHistory.FrequencyConsumption.create', compact('patient', 'user', 'foods', 'frequency'));
    } 

    public function frequencyConsumptionEdit($slug)
    {
        $patient = Patient::where('slug', $slug)->first();

        $user = Auth::user();

        $foods = Food::all();

        $frequency = FrequencyConsumption::where('patient_id', $patient->id)->get();

        return view('patients.NutritionalClinicalHistory.FrequencyConsumption.edit', compact('patient', 'user', 'foods', 'frequency'));
    }

    public function frequencyConsumptionAdd(Request $request)
    {
     //    $patient = Patient::where('slug', $slug)->first();

    FrequencyConsumption::create($request->all());

     //    return redirect()->route('ClinicHistoryPatient', $patient->slug)->with('success', 'Frecuencia de consumo creada');
    }

    public function frequencyConsumptionDelete($id)
    {
        $frequency = FrequencyConsumption::where('id', $id)->first();

        $frequency->delete();

        return back()->with('success', 'Alimento eliminado');
    }
}
