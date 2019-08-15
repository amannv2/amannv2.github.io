<?php
// including the config file
include_once 'functions.php';

if(validate()==true)
        {   
          include_once'header-log.php';
          
        }
        else
        {
include_once'header.php';}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(3){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
   <br />
    <h2 class="text-center article-title">Invoice</h2>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="favicon.png" style="width:100px; max-width:100px;">
                            </td>
                            <td></td>
                            <td>
                                Created at: <?php date_default_timezone_set('Asia/Kolkata');
                                $date = date('m/d/Y h:i:s a', time());
                                echo $date; ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                Publisher Hub, Inc.<br>
                                2, Rana Pratap Marg<br>
                                Lucknow, UP 226001
                            </td>
                            <td></td>
                            <td>
                                Publisher Hub<br />
                                9876543210<br />pubhub@gmail.com
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Publisher
                </td>
                
                <td></td>
                
                <td>
                    Author
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    <?php echo $_COOKIE['SLD']; ?> <br /> <?php echo $_COOKIE['SLC']; ?>
                </td>
                
                <td></td>
                
                <td>
                    <?php echo $_COOKIE['usr']; ?> <br /> <?php echo $_COOKIE['SLZ']; ?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment
                </td>
                
                <td></td>
                                   
                <td>
                    Status
                </td>
            </tr>
                                    
            <tr class="details">
                <td>
                    Online
                </td>
                
                <td></td>
                
                <td>
                    Paid
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Book
                </td>
                
                <td>
                    Quantity
                </td>
                
                <td>
                    Price
                </td>
            </tr>     
            
            <tr class="item last">
                <td>
                  <?php   echo $buk; ?>
                 <p style="font-size: 12px;">   <u>Description:</u> <?php  echo $message2; ?></p>
                </td>
                
                <td>
                    <?php echo $qty; ?>
                </td> 
                
                <td>
                    <?php echo $mrp; ?>.00
                </td>
            </tr>
            
            <tr class="total">
                <td></td><td></td>
                
                <td>
                   Total: <?php echo $mrp; ?>.00
                </td>
            </tr>
        </table>
    </div>
    <br />
   <div class="text-center article-title">
   <form method="post" target="_blank" action="print.php">
   <input type="hidden" value="<?php echo $_COOKIE['SLD'] . ";" . $_COOKIE['SLC'] . ";" . $_COOKIE['usr'] . ";" . $_COOKIE['SLZ'] . ";" . $buk . ";" . $message2 . ";" . $qty . ";" . $mrp ?>" name="msg" />
   <input type="submit" value="Print" name="prnt" />
   </form>
   </div> <br />
</body>
</html>
<?php include_once'footer.php'; ?>