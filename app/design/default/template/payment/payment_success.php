<?php
/**
 * Created by Ademu Anthony.
 * User: Tony
 * Date: 3/20/2015
 * Time: 3:34 PM
 */
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Transaction
        <small>Make Payment</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo OpenSms::getActionUrl('Index', 'Dashboard', 'Dashboard')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo OpenSms::getActionUrl('Index', 'Transaction', 'Account')?>"><i class="fa fa-dashboard"></i> Transaction</a></li>
        <li class="active">Payment Completed</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">

        <div class="col-md-7">

            <!-- BANK DETAIL -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Payment Completed</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <p class="text-success">You have correctly completed your payment for the purchase of bulk SMS.<br/>
                        You will receive a notification once your payment is confirm and your account is credited.<br/>
                        Thanks for your patronage</p>


                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->


        <div class="col-md-5">

            <!-- BANK DETAIL -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Transaction Detail</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table">
                        <tr>
                            <td style="width: 130px;">Amount: </td>
                            <td><?php echo $this->data['transaction']->Amount ?></td>
                        </tr>
                        <tr>
                            <td>Unit: </td>
                            <td><?php echo $this->data['transaction']->Unit ?></td>
                        </tr>
                        <tr>
                            <td>Type: </td>
                            <td><?php echo $this->data['transaction']->Type ?></td>
                        </tr>
                        <tr>
                            <td>Status: </td>
                            <td><?php echo $this->data['transaction']->Status ?></td>
                        </tr>
                        <tr>
                            <td>Payment Method: </td>
                            <td><?php echo $this->data['transaction']->PaymentMethod ?></td>
                        </tr>
                    </table>

                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
    </div><!-- /.row -->

</section><!-- /.content -->