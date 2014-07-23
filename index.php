<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Fertility Handbook | Guide to In Vitro Fertilization (IVF)</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="An interactive patient guide to IVF and fertility treatment provided by New Hope Fertility Center, leading IVF clinic in New York focusing on customized natural cycle and minimal stimulation IVF." />
    <meta name="keywords" content="Fertility Handbook, Guide to IVF, In vitro fertilization, IVF, fertility preservation, fertility treatments, vitrification, cryopreservation, embryo banking, flash freezing, New Hope Fertility Center, New York IVF"/>
    <?php $offset = '';
	
	include($offset.'includes/links.php') ;
	$current_page = 'home';
	
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
	$ipad = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
	if ($ipad || $iphone)
	{
		echo
			'<style>
				#navigation {width:1100px; margin:auto; overflow:visible;}
			</style>';
	}
	?>
</head>
<body>
	<div id="navigation"></div>
    <div id="page_title"><h1 class="title">Fertility Handbook <span class="switch">You can also view this page as a <a href="pages/introduction/index.php">traditional website</a>.</span></h1></div>
    <div class="book_wrapper">
        <a id="next_page_button"></a>
        <a id="prev_page_button"></a>
        <div id="loading" class="loading">Loading pages...</div>
        <div id="mybook" style="display:none;">
            <div class="b-load">
                <div id="front-cover" class="page"></div>
                <div class="page" rel="About New Hope Fertility"><?php include ('pages/introduction/index.php') ?></div>
                <div class="page"><?php include ('pages/top-fertility-doctors/index.php') ?></div>
                <div class="page" rel="1: Reproductive Health"><?php include ('pages/reproductive-health-overview/index.php') ?></div>
                <div class="page"><?php include ('pages/reproductive-health-overview/female-reproductive-system.php') ?></div>
                <div class="page"><?php include ('pages/reproductive-health-overview/menstrual-cycle.php') ?></div>
                <div class="page"><?php include ('pages/reproductive-health-overview/fertilization-and-pregnancy.php') ?></div>
                <div class="page"><?php include ('pages/reproductive-health-overview/common-causes-of-female-infertility.php') ?></div>
                <div class="page"><?php include ('pages/reproductive-health-overview/male-reproductive-system.php') ?></div>
                <div class="page"><?php include ('pages/reproductive-health-overview/common-causes-of-male-infertility.php') ?></div>
                <div class="page"></div>
                <div class="page" rel="2: Common Procedures"><?php include ('pages/common-fertility-procedures/index.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/timed-intercourse.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/intrauterine-inseminitaion-iui.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/in-vitro-fertilization-ivf.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/embryology-techniques.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/surgical-techniques.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/intracytoplasmic-sperm-injection-icsi.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/testicular-biopsy.php') ?></div>
                <div class="page"><?php include ('pages/common-fertility-procedures/microsurgical-sperm-aspiration-mesa-tese.php') ?></div>
                <div class="page"></div>
                <div class="page" rel="3: Mini-IVF&trade; Step-by-Step"><?php include ('pages/mini-ivf-minimal-stimulation-ivf/index.php') ?></div>
                <div class="page"><?php include ('pages/mini-ivf-minimal-stimulation-ivf/what-to-expect.php') ?></div>
                <div class="page"><?php include ('pages/mini-ivf-minimal-stimulation-ivf/mini-ivf-procedural-overview.php') ?></div>
                <div class="page"><?php include ('pages/mini-ivf-minimal-stimulation-ivf/potential-risks-and-side-effects.php') ?></div>
                <div class="page"><?php include ('pages/mini-ivf-minimal-stimulation-ivf/frequently-asked-questions.php') ?></div>
                <div class="page"></div>
                <div class="page" rel="4: Patient Resources"><?php include ('pages/patient-resources/index.php') ?></div>
                <div class="page"><?php include ('pages/patient-resources/fertility-preservation-and-cancer-patients.php') ?></div>
                <div class="page"><?php include ('pages/patient-resources/out-of-town-patients.php') ?></div>
                <div class="page"><?php include ('pages/patient-resources/financial-considerations.php') ?></div>
                <div class="page"><?php include ('pages/patient-resources/information-disclaimer.php') ?></div>
                <div class="page"></div>
                <div id="back-cover" class="page">
                	<div id="copyright-info">
                    <p>784 Park Avenue, New York, New York 10021<br />
                    4 Columbus Circle, New York, New York 10019<br />
                    Tel 212.517.7676  Fax 212.396.0600<br />
                    <a href="http://www.newhopefertility.com" target="_blank">www.newhopefertility.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/javascript-controls.js" type="text/javascript"></script>
</body>
</html>