<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Genetify &mdash; A play-full walkthru</title>

    <script type="text/javascript">
        GENETIFY_CONFIG = {
            SHOW_RESULTS: true,
            USE_COOKIE: false,
            USE_RESULTS_CACHE: false,
            REMOTE_BASE_URL: '..',
            //TODO: seperate by user of demo?
            NAMESPACE: window.location.pathname + window.location.search
        };
    </script>

    <?php
        include('test-sections/_head.html');
        if (empty($_GET['p'])) {
            $_GET['p'] = 'intro';
        }
    ?>

    <style type="text/css" media="screen">
        /* override controls.css */
        #genetify_results {
            position: static;
            display: none;
        }
        #genetify_results_table {
            width: 200px;
        }
        #genetify_results_table .genetify_gene_row {
            display: none;
        }
        #genetify_results_table .genetify_col_sum,
        #genetify_results_table .genetify_col_stddev,
        #genetify_results_table .genetify_col_share {
            display: none;
        }
        #genetify_results_table td {
            height: auto;
        }
    </style>

</head>

<body>

    <h1>Genetify</h1>

    <table id="demo_table" border="0" cellspacing="10">
        <?php include('test-sections/' . $_GET['p'] . '.html'); ?>
    </table>

    <script type="text/javascript" charset="utf-8">

        genetify.vary('elements', 'additiveCSSRules');

    </script>


<p><a style="font-size:0.75em" href="http://github.com/gregdingle/genetify/wikis">Project homepage</a></p>
</body>
</html>
