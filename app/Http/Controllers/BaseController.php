<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    protected $data = null;
/**
     * @param $title
     * @param $subTitle
     */
    protected function setPageTitle($title, $mainTitle='', $subTitle='')
    {
        view()->share(['pageTitle' => $title, 'mainTitle' => $mainTitle, 'subTitle' => $subTitle]);
    }
    
    protected function responseRedirect($route, $message, $type = 'info', $error = false, $withOldInputWhenError = false)
    {

        if ($error && $withOldInputWhenError) {
            return redirect()->back()->withInput();
        }

        if(!empty($urlparams)){
            return redirect()->route($route,$urlparams);
        }else{
            return redirect()->route($route);
        }
    }

    /**
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function responseRedirectBack($message, $type = 'info', $error = false, $withOldInputWhenError = false, $anchor="")
    {
        $anchor = !empty($anchor) ? $anchor:'';
        return Redirect::to(URL::previous() . $anchor);
    }

    /**
     * @param $route
     * @param $queryParams
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function responseRedirectWithQueryString($route, $queryParams, $message, $type = 'info', $error = false, $withOldInputWhenError = false)
    {
        
        if ($error && $withOldInputWhenError) {
            return redirect()->back()->withInput();
        }

        return redirect()->route($route, $queryParams);
    }

    /**
     * @param int $errorCode
     * @param null $message
     * @return \Illuminate\Http\Response
     */
    protected function showErrorPage($errorCode = 404, $message = null)
    {
        $data['message'] = $message;
        return response()->view('errors.'.$errorCode, $data, $errorCode);
    }

    /**
     * @param bool $error
     * @param int $responseCode
     * @param null $message
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function responseJson($status = true, $responseCode = 200, $message ="", $data = null)
    {
        return response()->json([
            'status'        =>  $status,
            'response_code' =>  $responseCode,
            'message'       =>  ucwords($message),
            'data'          =>  $data ?? []
        ],$responseCode);
    }

    protected function responsePaginated($resourceClass, $query, Request $request, $message = "Data found successfully")
    {
        try {
            DB::beginTransaction();
            $items = $query->paginate(10)->appends($request->except('page'));
            DB::commit();

            return response()->json([
                'status' => true,
                'response_code' => 200,
                'message' => $message,
                'data' => $resourceClass::collection($items),
                'pagination' => [
                    'total' => $items->total(),
                    'count' => $items->count(),
                    'per_page' => $items->perPage(),
                    'current_page' => $items->currentPage(),
                    'total_pages' => $items->lastPage(),
                    'next_page' => $items->nextPageUrl(),
                ],
            ], 200);
        } catch (\Exception $e) {
            DB::rollback();
            logger($e->getMessage() . ' on ' . $e->getFile() . ' in ' . $e->getLine());
            return response()->json([
                'status' => false,
                'response_code' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
