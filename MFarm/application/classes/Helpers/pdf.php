<?php defined('SYSPATH') or die('No direct script access.');

class Helpers_Pdf{
    protected $_pdf;

    /**
     * Set up default values
     */
    public function __construct($lang = NULL){
        if ($lang === NULL)
        {
            $lang = 'eng';
        }

        require Kohana::find_file('vendor/tcpdf', 'tcpdf');
        /*require Kohana::find_file('vendor/tcpdf/config/lang', $lang);

        // Create new PDF document - const. from tcpdf_config
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, TRUE, 'UTF-8', FALSE);

        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('');
        $pdf->SetTitle('');
        $pdf->SetSubject('');
        $pdf->SetKeywords('');

        // Remove default header/footer
        $pdf->setPrintHeader(FALSE);
        $pdf->setPrintFooter(FALSE);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Set font
        $pdf->SetFont('dejavusans', '', 10);

        // Add a page
        $pdf->AddPage();
        $this->_pdf = $pdf;*/
    }

    public function content($html){
        $this->_pdf->writeHTML($html, TRUE, FALSE, TRUE, FALSE, '');
    }

    /**
     * Rendering PDF with given values
     * [1] Name
     * [2] D - Download, I - default action defined in client browser (main options)
     */
    public function save($name){
        $this->_pdf->Output($name . '.pdf', 'I');
        Request::current()->response()->headers('Content-Type', 'application/pdf');
    }
}