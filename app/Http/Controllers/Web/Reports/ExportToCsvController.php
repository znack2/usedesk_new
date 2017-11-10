<?php

class ExportToCsvController extends BaseController {

    protected $generalReportFieldsRu =  [];
    protected $headersCsv = ['Content-Type' => 'text/csv',];
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;

        $this->generalReportFieldsRu = [
            trans('text._csv.number'),
            trans('text._csv.time'),
            trans('text._csv.channel'),
            trans('text._csv.client_name'),
            trans('text._csv.client_email'),
            trans('text._csv.client_phone'),
            trans('text._csv.client_company'),
            trans('text._csv.subject'),
            trans('text._csv.attachments'),
            trans('text._csv.current_status'),
            trans('text._csv.date_status'),
            trans('text._csv.current_type'),
            trans('text._csv.current_priority'),
            trans('text._csv.agent'),
            trans('text._csv.first_answer_date'),
            trans('text._csv.rules'),
            //trans('text._csv.macroses'),
            trans('text._csv.tags')
        ];
    }

    //выгружает основной отчет в csv
    public function getExportGeneralReport()
    {
        return $this->response
                    ->download($csv['file'], $filename, $csv['headers']);
    }
}
