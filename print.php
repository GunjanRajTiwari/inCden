<?php
include('includes/security.php'); 
date_default_timezone_set('Asia/Karachi');


if(isset($_POST['printreport']))
{
    require 'dbc.php';
    require("TCPDF-master/tcpdf.php");

        Class myPDF extends TCPDF
        {
            function Header()
            {
                $this->Image('img/vmlogo.jpg',6,-7,35);
                $this->Ln(18);
                $this->SetFont('arial','',11);
                $this->Cell(130,5,'Information Security',0,0);
                $this->Cell(59,5,'Confidential',0,0,'R');
                $this->Ln();
                $this->Cell(130,5,'Security Incident Report',0,0);
                $this->Cell(59,5,'version 2.0',0,0,'R');
            }
            function Footer()
            {
                $this->SetY(-15);
                $this->SetFont('arial','',8);
                $this->Cell(0,10,'Page '.$this->getAliasNumPage()."/".$this->getAliasNbPages(),0,0,'C');
            }
            function viewpage($connection)
            {
                $id = $_POST['report_id']; 
                $query = "SELECT * FROM reports where reid=?";
                $stmt = mysqli_stmt_init($connection);
                mysqli_stmt_prepare($stmt, $query);
                mysqli_stmt_bind_param($stmt, "s", $id);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                
                while($data = mysqli_fetch_assoc($result))
                {
                    $this->SetFillColor(192,192,192);
                    $this->SetFont('arial','B',11);
                    $this->Cell(37,8,"Contact Name",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(59,8,$data['cname'],1,0,'','');
                    $this->SetFont('arial','B',11);
                    $this->Cell(30,8,"Email",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(63,8,$data['cemail'],1,0,'','');
                    $this->Ln(11);

                    $this->SetFillColor(30,180,255);
                    $this->SetTextColor(255,255,255);
                    $this->SetFont('arial','B',8);
                    $this->Cell(189,7,"SECURITY INCIDENT: SUMMARY",1,0,'',TRUE);
                    $this->Ln(10);

                    $this->SetFont('arial','B',11);
                    $this->Cell(189,7,"LOCATION OF INCIDENT",1,0,'',TRUE);
                    $this->Ln();

                    $this->SetTextColor(0,0,0);
                    $this->SetFillColor(192,192,192);
                    $this->SetFont('arial','B',11);
                    $this->Cell(48,7,"Business Unit",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(48,7,$data['bunit'],1,0,'','');
                    $this->SetFont('arial','B',11);
                    $this->Cell(30,7,"Country",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(63,7,$data['bcountry'],1,0,'','');
                    $this->Ln();

                    $this->SetFillColor(30,180,255);
                    $this->SetTextColor(255,255,255);
                    $this->SetFont('arial','B',8);
                    $this->Cell(189,7,"SUMMARY OF INCIDENT",1,0,'',TRUE);
                    $this->Ln();

                    $this->SetTextColor(0,0,0);
                    $this->SetFillColor(192,192,192);
                    $this->SetFont('arial','B',11);
                    $this->Cell(48,7,"Date of Incident",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(48,7,$data['idate'],1,0,'','');
                    $this->SetFont('arial','B',11);
                    $this->Cell(30,7,"Severity Level",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(63,7,$data['iseverity'],1,0,'','');
                    $this->Ln();

                    $this->SetFont('arial','B',11);
                    $this->Cell(48,7,"Incident Name",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(48,7,$data['iname'],1,0,'','');
                    $this->SetFont('arial','B',11);
                    $this->Cell(30,7,"Status",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    if($data['istatus']==0)
                    $status = "Closed";
                    else
                    $status = "Open";
                    $this->Cell(63,7,$status,1,0,'','');
                    $this->Ln();

                    $this->SetFont('arial','B',11);
                    $this->Cell(48,7,"Report Date",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(48,7,$data['ireportdate'],1,0,'','');
                    $this->SetFont('arial','B',11);
                    $this->Cell(30,7,"Report No.",1,0,'',TRUE);
                    $this->SetFont('arial','B',9);
                    $this->Cell(63,7,$data['reno'],1,0,'','');
                    $this->Ln();

                    $this->SetFont('arial','B',11);
                    $this->Cell(48,7,"",1,0,'',TRUE);
                    $this->SetFont('arial','',9);
                    $this->Cell(48,7,"",1,0,'','');
                    $this->SetFont('arial','B',11);
                    $this->Cell(30,7,"",1,0,'',TRUE);
                    $this->SetFont('arial','B',9);
                    $this->Cell(63,7,"",1,0,'','');
                    $this->SetFont('arial','',9);
                    $this->Ln();
                    
                    $html = '<table>
                                <tr nobr="true">
                                    <th width="136">&nbsp;<br>Incident<p style="font-size:8px; font-weight:normal;">Brief description of the incident, i.e. period of detection, how it was detected, assets involved, vulnerabilities, threat, etc</p></th>
                                    <td width="0">'. nl2br($data["idetails"]) .'</td>
                                </tr>
                                <tr nobr="true">
                                    <th width="136">&nbsp;<br>Root Cause Analysis</th>
                                    <td width="0">'. nl2br($data["rootcause"]) .'</td>
                                </tr>
                                <tr nobr="true">
                                    <th width="136">&nbsp;<br>Implications</th>
                                    <td width="0">'. nl2br($data["implications"]) .'</td>
                                </tr>
                                <tr nobr="true">
                                    <th width="136">&nbsp;<br>Potential Risk<p style="font-size:8px; font-weight:normal;">What are the potential risks if the incident is not handled or mitigated?</p></th>
                                    <td width="0">'. nl2br($data["risks"]) .'</td>
                                </tr>
                                <tr nobr="true">
                                    <th width="136">&nbsp;<br>Mitigating Measures<p style="font-size:8px; font-weight:normal;">What are the action(s) taken or plan actions to mitigate the loss or impact and measured implemented (corrective measures) to prevent the reoccurrence of the incident (preventive measures)? Please indicate the timeline.</p></th>
                                    <td width="0">'. nl2br($data["mitigating"]) .'</td>
                                </tr>
                                <tr nobr="true">
                                    <th width="136">&nbsp;<br>Comments<p style="font-size:8px; font-weight:normal;">Any other valuable information to which may be of interest.</p></th>
                                    <td width="0">'. nl2br($data["comments"]) .'</td>
                                </tr>
                            </table>

                            <br><br><br>
                            <label class="text-dark" style="font-size:8px"><u>Note:</u><ul>
                            <li>All information are mandatory except for comments column.</li>
                            <li>This reporting template is applicable for Information Security. Use this template when reporting Severe Security Incident or Security Incident with high impact and/or possibility of impacting other business units.</li>
                            </ul></label>

                            <style>
                            table {
                                border-collapse:collapse;
                            }
                            td {
                                border:1px solid #000000;
                                font-size:9px;
                            }
                            th {
                                border:1px solid #000000;
                                background-color:#C0C0C0;
                                font-size:11px;
                                font-weight:bold;
                                padding: 30px;
                                vertical-align: middle;
                            }
                            </style>'
                            ;

                    $this->WriteHTMLCell(0,0,9,"",$html,0,0);
                    
                }
            }
        }

        $pdf = new myPDF('P','mm','A4');
        $pdf->SetMargins(10, 35, 10);
        $pdf->AddPage();
        $pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->viewpage($connection);
        $pdf->Output();
}





