<?php defined('SYSPATH') or die('No direct script access.');

/*class Helpers_Pdf{
    protected $_pdf;

     //
     // Set up default values
     //
    public function __construct($lang = NULL){
        if ($lang === NULL)
        {
            $lang = 'eng';
        }

        require Kohana::find_file('../vendor/tcpdf', 'tcpdf');
        require Kohana::find_file('../vendor/tcpdf/config/lang', $lang);

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
        $pdf->SetFont('dejavusans', '', 20);

        // Add a page
        $pdf->AddPage();
        $this->_pdf = $pdf;
    }

    public function content($html){
        $this->_pdf->writeHTML($html, TRUE, FALSE, TRUE, FALSE, '');
    }

    //
    // Rendering PDF with given values
    // [1] Name
    // [2] D - Download, I - default action defined in client browser (main options)
    //
    public function save($name){
        $this->_pdf->Output($name . '.pdf', 'I');
		//echo $this->_pdf;
        //Request::current()->response()->headers('Content-Type', 'application/pdf');
        //Request::current()->headers('Content-Type', 'application/pdf');
        //$req = Request::current()->execute();
		//$req->headers('Content-Type', 'application/pdf');
    }
}*/


/* DocumentPDF class, provides an easy interface to parse and display a pdf document */
//include Kohana::find_file('modules','tcpdf');
//require_once('tcpdf.php');
//require_once('config/lang/pol.php');
require Kohana::find_file('../vendor/tcpdf', 'tcpdf');
require Kohana::find_file('../vendor/tcpdf/config/lang', 'eng');

class Helpers_Pdf extends TCPDF {
	public function __construct(){
		//require Kohana::find_file('../vendor/tcpdf', 'tcpdf');
		//require Kohana::find_file('../vendor/tcpdf/config/lang', 'eng');
		//require_once('..vendor/tcpdf/config/lang/eng.php');
		//require_once('..vendor/tcpdf/tcpdf.php');
		
		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Nicola Asuni');
		$pdf->SetTitle('TCPDF Example 001');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
		
		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		$pdf->setFooterData($tc=array(0,64,0), $lc=array(0,64,128));
		
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		
		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		
		//set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		//set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
		//set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		
		//set some language-dependent strings
		//$pdf->setLanguageArray($l);
		
		// ---------------------------------------------------------
		
		// set default font subsetting mode
		$pdf->setFontSubsetting(true);
		
		// Set font
		// dejavusans is a UTF-8 Unicode font, if you only need to
		// print standard ASCII chars, you can use core fonts like
		// helvetica or times to reduce file size.
		$pdf->SetFont('dejavusans', '', 14, '', true);
		
		// Add a page
		// This method has several options, check the source code documentation for more information.
		$pdf->AddPage();
		
		// set text shadow effect
		$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
		
		// Set some content to print
		$html = '
		<h1>Welcome to <a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a>!</h1>
		<i>This is the first example of TCPDF library.</i>
		<p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
		<p>Please check the source code documentation and other examples for further information.</p>
		<p style="color:#CC0000;">TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href="http://sourceforge.net/donate/index.php?group_id=128076">MAKE A DONATION!</a></p>
		';
		
		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
		
		// ---------------------------------------------------------
		
		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.
		$pdf->Output('example_001.pdf', 'I');	
	}
}




/*class Helpers_Pdf
{
    protected $_pdf; // The actual PDF, Object of TCPDF class
    public $width; // Width of content area, not the PDF page itself
    public $height; // Height of content area, not the PDF page itself
    public $keywords = array(); // Default keywords you would want for all documents

    public function __construct($attributes = NULL, $margins = NULL)
    {
    	require_once Kohana::find_file('../vendor/tcpdf', 'tcpdf');
		require_once Kohana::find_file('../vendor/tcpdf/config/lang', 'eng');
	
     $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'LETTER', TRUE, 'UTF-8', FALSE);

     $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor($attributes['author'] ? $attributes['author'] : PDF_AUTHOR);
        $pdf->SetTitle($attributes['title'] ? $attributes['title'] : '');
        $pdf->SetSubject($attributes['subject'] ? $attributes['subject'] : '');
        $this->keywords = (!empty($attributes['keywords'])) ? array_merge($attributes['keywords'], $this->keywords) : $this->keywords;
        $pdf->SetKeywords(implode(', ', $this->keywords));

        // Remove default header/footer
        $pdf->setPrintHeader(FALSE);
        $pdf->setPrintFooter(FALSE);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, (is_int($margins[3]) ? $margins[3] : PDF_MARGIN_BOTTOM));

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins((is_int($margins[0]) ? $margins[0] : PDF_MARGIN_LEFT), (is_int($margins[1]) ? $margins[1] : PDF_MARGIN_TOP), (is_int($margins[2]) ? $margins[2] : PDF_MARGIN_RIGHT));
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Set font
        $pdf->SetFont('helvetica', '', 10);
        $pdf->SetTextColor(0);

        $pdf->AddPage();
        $this->_pdf = $pdf;
        $this->set_pdf_width();
        $this->get_width_height();
    }
    public function set_pdf_width()
    {
     $pthw = $this->_pdf->getPageSizeFromFormat('LETTER');
     $ptheight = $pthw['height'];
     $ptwidth = $pthw['width'];
     switch(PDF_UNIT)
     {
     case 'mm':
     define('PDF_WIDTH', $ptwidth / 2.834645669);
     define('PDF_HEIGHT', $ptheight / 2.834645669);
     break;
     case 'pt':
     define('PDF_WIDTH', $ptwidth);
     define('PDF_HEIGHT', $ptheight);
     break;
     case 'cm':
     define('PDF_WIDTH', $ptwidth / 28.346456693);
     define('PDF_HEIGHT', $ptheight / 28.346456693);
     break;
     case 'in':
     define('PDF_WIDTH', $ptwidth / 72);
     define('PDF_WIDTH', $ptheight / 72);
     break;
     }
    }
    public function get_width_height()
    {
        $this->width = (PDF_WIDTH - ($this->get_margin('left') + $this->get_margin('right')));
        $this->height = (PDF_HEIGHT - ($this->get_margin('top') + $this->get_margin('bottom')));
    }
    public function get_margin($side='left')
    {
        $margins = $this->_pdf->getMargins();
        return $margins[$side];
    }
    public function new_page()
    {
        $this->_pdf->AddPage();
        $this->_pdf->SetXY($this->get_margin('left'),$this->get_margin('top'));
    }
    public function getPages()
    {
        return count($this->_pdf->pages);
    }
    public function removeBlankPages()
    {
        for($i=1; $i < count($this->_pdf->pages)+1; $i++)
        {
            if(strlen($this->_pdf->pages[$i]) < 500)
            {
                $this->_pdf->deletePage($i);
            }
        }
        return $this->getPages();
    }
    public function render($file='temp')
    {
        $this->removeBlankPages();
        $this->_pdf->Output($file.'.pdf', 'I');
        Request::current()->response()->headers('Content-Type', 'application/pdf');
    }


    // Building Blocks
    //
// $items is an array of the header items in the format array('Heading' => width)
// a heading with the width of 5 will increase it's own width by 4, while adding
// to the total number of units that fit in 100% width.
// calculated width = (content width / total cell count) * cell width
// $items = array( 'date'=>1, 'full name'=>3, 'account balance'=>3); etc, etc
//
    public function item_header_row($items,$height=1,$border='TB',$align='L',$fill=0)
    {
        $total_width = 0;
        foreach($items as $width){ $total_width+=$width; }
        foreach($items as $heading => $width)
        {
            $this->_pdf->MultiCell(($this->width/$total_width)*$width, $height,$heading,$border,$align,$fill,0);
        }
        $this->_pdf->Ln();
    }
    //
// item_row is the same idea as item_header_row
//
    public function item_row($cells,$height=1,$border=0,$align='L',$fill=0)
    {
        $total_width = 0;
        foreach($cells as $width){ $total_width+=$width; }
        foreach($cells as $value => $width)
        {
            $this->_pdf->MultiCell(($this->width/$total_width)*$width, $height,$value,$border,$align,$fill,0,'','',true,0,true);
        }
        $this->_pdf->Ln();
    }
}*/
