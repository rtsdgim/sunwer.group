<?php
$err_type = NULL;
if (isset($_GET['type'])) {
    $err_type = $_GET['type'];
}

switch ($err_type) {
    case 400: $err_msg = 'Bad Request'; break;
    case 401: $err_msg = 'Unauthorized'; break;
    case 402: $err_msg = 'Payment Required'; break;
    case 403: $err_msg = 'Forbidden'; break;
    case 404: $err_msg = 'The requested page was not found'; break;
    case 405: $err_msg = 'Method Not Allowed'; break;
    case 406: $err_msg = 'Not Acceptable'; break;
    case 407: $err_msg = 'Proxy Authentication Required'; break;
    case 408: $err_msg = 'Request Time-out'; break;
    case 409: $err_msg = 'Conflict'; break;
    case 410: $err_msg = 'Gone'; break;
    case 411: $err_msg = 'Length Required'; break;
    case 412: $err_msg = 'Precondition Failed'; break;
    case 413: $err_msg = 'Request Entity Too Large'; break;
    case 414: $err_msg = 'Request-URI Too Large'; break;
    case 415: $err_msg = 'Unsupported Media Type'; break;
    case 500: $err_msg = 'Internal Server Error'; break;
    case 501: $err_msg = 'Not Implemented'; break;
    case 502: $err_msg = 'Bad Gateway'; break;
    case 503: $err_msg = 'Service Unavailable'; break;
    case 504: $err_msg = 'Gateway Time-out'; break;
    case 505: $err_msg = 'HTTP Version not supported'; break;
    default: $err_msg = 'Unknown error'; break;
}
?>  

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" itemscope itemtype="http://schema.org/Organization">
    <head>
        <?php include_once '../php/init_translation.php'; ?>
        <?php include_once './shared/links.php'; ?>
        <?php include_once './shared/meta.php'; ?>
        <title><?= $lang['ERROR_PAGE']['TAB_TITLE']; ?></title>
    </head>
    <body>
        <style>
            html {
                height:100%;
                width:100%;
                background: #F7F9FA;
                background: -webkit-linear-gradient(135deg, #D2D2D2, #ffffff 35%);
                background: linear-gradient(135deg, #D2D2D2, #ffffff 35%);
            }
            .err-container{
                margin-top:15%;
            }

            @media screen and (max-width:602px) {
                .err-container{
                    margin-top:30%;
                }
            }

            a{
                color: #37474f;
                text-decoration: underline;
                font-size: 16px;
                font-weight: 500;
                padding: 10px 11px;
            }

            a:hover{
                color: #0F9D58;
            }
        </style>

        <div class="center err-container">
            <h3 class="light">
                <b><?php echo $err_type; ?></b>
                <?php echo $err_msg; ?>
            </h3>
            
            <br/>
            <a href="javascript:location.reload();"><?= $lang['ERROR_PAGE']['RELOAD_PAGE']; ?></a>
            <a href="javascript:history.back();"><?= $lang['ERROR_PAGE']['PREV_PAGE']; ?></a>
            <a href="/"><?= $lang['ERROR_PAGE']['HOME_PAGE']; ?></a>
        </div>

        <div class="center" style="position:absolute;bottom:18px;width:100px;right:25%;left:50%;margin-left:-50px;font-size:14px;">
            <span><?= $lang['FOOTER']['COPYRIGHT']; ?></span>
        </div>
    </body>
</html>