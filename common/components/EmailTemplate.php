<?php
namespace common\components;

/**
 * Description of Angka
 *
 * @author feb
 */
class EmailTemplate {

    public static function content($index, $about, $facebook, $twitter, $url, $name, $email) {
        return '
    <div class="action-btn" style="display: none;">
        <a href="" class="add-section" title="duplicate section"><img src="http://promail.ma/boutika/demo/img/add-section.png" alt="add section"></a>
        <a href="" class="remove-section" title="remove section"><img src="http://promail.ma/boutika/demo/img/remove-section.png" alt="remove section"></a>
        <a href="" class="change-background" title="change background"><img src="http://themastermail.com/discount/demo/img/change-bg.png" alt="edit background"></a>
    </div>
        
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="eef3f5">
        
        <tbody><tr>
            <td align="center" style="background-image: url(http://promail.ma/envato/quark/img/main-bg.jpg); background-size: cover; background-position: top center; background-repeat: no-repeat;" class="main-bg">
                
                <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
                    
                    <tbody><tr><td height="35" style="font-size: 35px; line-height: 35px;">&nbsp;</td></tr>
                    
                    <tr>
                        <td>
                            <table border="0" align="left" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
                                
                                <tbody><tr>
                                    <td align="center">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                                        
                                            <tbody><tr>
                                                <!-- ======= logo ======= -->
                                                <td align="center">
                                                    <a href="'.$index.'" style="display: block; border-style: none !important; border: 0 !important;" class="editable_img"><img editable="true" mc:edit="logo" width="98" border="0" style="display: block; width: auto;" src="http://tk-themes.net/html-jobmonster/images/logo-jobmonster.png" alt="" class=""></a>
                                                </td>
                                            </tr>
                                        </tbody></table>        
                                    </td>
                                </tr>
                                
                            </tbody></table>
                            
                            <table border="0" align="left" width="5" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="container590">
                                <tbody><tr><td width="5" height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr>
                            </tbody></table>
                            
                            <table border="0" align="right" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="hide">
                                <tbody><tr> 
                                    <td align="center" mc:edit="navigation" style="color: #cde2f6; font-size: 14px; font-family: Muli, Calibri, sans-serif; line-height: 20px;">
                                        <div class="editable_text" style=" line-height: 20px;">
                                            <span class="text_container">
                                            <multiline>
                                                <a href="'.$about.'" style="color: #778ea2; text-decoration: none;">About<span style="font-size: 20px; color: #5dbcff;">.</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$facebook.'" style="color: #778ea2; text-decoration: none;">Facebook<span style="font-size: 20px; color: #5dbcff;">.</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.$twitter.'" style="color: #778ea2; text-decoration: none;">Twitter<span style="font-size: 20px; color: #5dbcff;">.</span></a>
                                            </multiline>
                                            </span>
                                        </div>  
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    
                    <tr class="hide"><td height="75" style="font-size: 75px; line-height: 75px;">&nbsp;</td></tr>
                    <tr><td height="50" style="font-size: 70px; line-height: 70px;">&nbsp;</td></tr>

                    <tr>
                        <td align="center" mc:edit="main-header" style="color: #42586c; font-size: 48px; font-family: Raleway, Calibri, sans-serif; font-weight: 300; line-height: 40px;" class="title_color main-section-header">
                            <!-- ======= section text ====== -->
                            
                            <div class="editable_text" style="line-height: 40px">
                                <span class="text_container">Greeting '.$name.'</span>
                            </div>
                        </td>   
                    </tr>
                    
                    <tr><td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td></tr>
                    
                    <tr>
                        <td align="center" mc:edit="main-text" style="color: #788ea2; font-size: 16px; font-family: Muli, Calibri, sans-serif; line-height: 24px;" class="text_color">
                            <!-- ======= section text ====== -->
                            
                            <div class="editable_text" style="line-height: 24px">
                                <span class="text_container">Welcome to Jobmonster. Before we can get started, please verify your email address. <br>Click the link below to verify your new Jobmonster ID
                            </div>
                        </td>   
                    </tr>
                    
                    <tr><td height="35" style="font-size: 35px; line-height: 35px;">&nbsp;</td></tr>
                                
                    <tr>
                        <td align="center">
                            <table border="0" align="center" width="200" cellpadding="0" cellspacing="0" class="button_color" bgcolor="5dbbff" style="border-radius: 50px; background-color: rgb(230, 183, 6);">
                                
                                <tbody><tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr>
                                
                                <tr>
                                    <td align="center" style="color: #ffffff; font-size: 13px; font-family: Raleway, Calibri, sans-serif; font-weight: 600; line-height: 20px;" mc:edit="main-button">
                                        <a href="'.$url.'" style="text-decoration:none; color: #ffffff;">
                                            <div class="editable_text" style="line-height: 20px;">
                                                <span class="text_container">Click Here</span>
                                            </div>
                                        </a>
                                    </td>
                                    
                                </tr>
                                                                                        
                                <tr><td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td></tr>
                            
                            </tbody></table>
                            
                        </td>
                    </tr>
                    
                    <tr><td height="35" style="font-size: 35px; line-height: 35px;">&nbsp;</td></tr>

                    <tr>
                        <td align="center" mc:edit="main-text" style="color: #788ea2; font-size: 16px; font-family: Muli, Calibri, sans-serif; line-height: 24px;" class="text_color">
                            <!-- ======= section text ====== -->
                            
                            <div class="editable_text" style="line-height: 24px">
                                <span class="text_container">If clicking the URL above does not work, copy and paste this URL : <br>'.$url.'<br> into a browser window.</span>
                            </div>
                        </td>   
                    </tr>

                    <tr class="hide"><td height="65" style="font-size: 65px; line-height: 65px;">&nbsp;</td></tr>
                    <tr><td height="90" style="font-size: 90px; line-height: 90px;">&nbsp;</td></tr>
                    
                </tbody></table>
                
            </td>
        </tr>
    </tbody></table>
        ';
    }
}
