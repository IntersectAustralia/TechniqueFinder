<?php
/**
 * TechniqueFinder - view.php
 *
 * Description:
 * Author:           Intersect Australia Ltd
 * Created:          12 Aug 2019
 * Source:           https://github.com/IntersectAustralia/TechniqueFinder
 * License:          Copyright (c) 2019 Intersect Australia - Licensed under Creative Commons
 *                   Attribution-NonCommercial-ShareAlike 4.0 International (CC BY-NC-SA 4.0)
 *                   https://creativecommons.org/licenses/by-nc-sa/4.0/
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php $this->load->view('layout/header.php');?>
    <head><title>TF Admin | Show StaticContent</title></head>
    <div class="nav tf-navbar">
        <button class="btn" onclick="window.location='<?php echo base_url();?>TechniqueFinder/index'">
            <span class="home-icon">&nbsp;</span>
            <a class="tf-font-orange" style="text-decoration: none;">Home</a>
        </button>
        <button class="btn" onclick="window.location='<?php echo base_url();?>staticContent/index'">
            <span class="tf-database-table">&nbsp;</span>
            <a class="tf-font-orange" style="text-decoration: none;">StaticContent List</a>
        </button>
    </div>


    <div class="row" style="margin-left: 1em; ">
        <h1 class="tf-heading"> Show StaticContent</h1>
    </div>


<?php
if($this->session->flashdata('success-warning-message')){
    echo '<div id="success-warning-message" class="success-warning-message tf-font tf-font-size">';
    echo $this->session->flashdata('success-warning-message');
    echo '</div>';
}

?>

    <div class="tf-box">
        <table style="text-align: left;">
            <tr>
                <td class="tf-font-orange">Name</td>
                <td>&nbsp;&nbsp;</td>
                <td class="tf-font tf-font-size"><?php if($static_data['name'] == 'tf.home.quickGuide'){echo "Quick guide on the home page";}
                    if($static_data['name'] == 'tf.home.optionsExplanation'){echo "Options explanation on the home page";}
                    if($static_data['name'] == 'tf.home.searchExplanation'){echo "Search explanation on the home page";}
                    if($static_data['name'] == 'tf.home.allTechniquesExplanation'){echo "List all techniques explanation on the home page";}
                    if($static_data['name'] == 'tf.home.infoboxContent'){echo "Infobox (right hand side bar) content on the home page";}
                    if($static_data['name'] == 'tf.biologyChoices.quickGuide'){echo "Quick guide on the choices for biological sciences page";}
                    if($static_data['name'] == 'tf.biologyChoices.comparison.title'){echo "Comparison text on the choices for biological sciences page";}
                    if($static_data['name'] == 'tf.biologyChoices.left.title'){echo "Title for left side options on the choices for biological sciences page";}
                    if($static_data['name'] == 'tf.biologyChoices.right.title'){echo "Title for right side options on the choices for biological sciences page";}
                    if($static_data['name'] == 'tf.physicsChoices.quickGuide'){echo "Quick guide on the choices for physical sciences page";}
                    if($static_data['name'] == 'tf.physicsChoices.comparison.title'){echo "Comparison text on the choices for physical sciences page";}
                    if($static_data['name'] == 'tf.physicsChoices.left.title'){echo "Title for left side options on the choices for physical sciences page";}
                    if($static_data['name'] == 'tf.physicsChoices.right.title'){echo "Title for right side options on the choices for physical sciences page";}
                    if($static_data['name'] == 'tf.menu'){echo "Main menu on public site";}
                    if($static_data['name'] == 'tf.tracking.ammrf'){echo "Tracking AMMRF";}
                    if($static_data['name'] == ' tf.tracking.intersect'){echo "Tracking Intersect";}
                    ?></td>
            </tr>

            <tr><td>&nbsp;</td></tr>

            <tr style="width:50em;">
                <td class="tf-font-orange">Text</td>
                <td>&nbsp;&nbsp;</td>
                <td class="tf-font tf-font-size">
                    <div>
                        <xmp style="white-space:normal;">
                            <?php echo $static_data['text'];?>
                        </xmp>
                    </div>
                </td>
                </td>
            </tr>

        </table>
    </div>

    <button id="update" class="tf-button" onclick="window.location='<?php echo site_url("staticContent/edit/".$static_data['id'])?>'">
        <span class="tf-save">&nbsp;&nbsp;&nbsp;</span>
        <span class="tf-button-label">Edit</span>
    </button>



    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>


<?php $this->load->view('layout/footer.php');?>