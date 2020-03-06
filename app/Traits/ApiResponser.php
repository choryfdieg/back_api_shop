<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

trait ApiResponser{
	private function successResponse($data, $code){
		return response()->json($data, $code);
	}

	protected function errorResponse($message, $code){
		return response()->json(['error' => $message, $code], $code);
	}

	protecte function showAll(Collection $colletcion, $code = 200){
		return $this->successResponse(['data' => $collection], $code);
	}

	protecte function showOne(Model $instance, $code = 200){
		return $this->successResponse(['data' => $instance], $code);
	}
}