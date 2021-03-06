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
        Manage Pages
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo OpenSms::getActionUrl('Index', 'Dashboard', 'Admin')?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Manage Pages</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">


            <!-- GROUP LIST -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Page List</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Permalink</th>
                            <th>Title</th>
                            <th>Role</th>
                            <th>Layout</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach($this->data['pages'] as $u){ ?>
                            <tr>
                                <td><?php echo ++$this->data['sn']; ?></td>
                                <td><?php echo $u->Permalink; ?></td>
                                <td><?php echo $u->Title; ?></td>
                                <td><?php echo $u->Role; ?></td>
                                <td><?php echo $u->Layout; ?></td>
                                <td>
                                    <a href="<?php echo OpenSms::getActionUrl('manage', 'pages', 'cms', [0 => $u->Permalink])?>" class="btn btn-info">Manage</a> |
                                    <a href="<?php echo OpenSms::getActionUrl('delete', 'pages', 'cms', [0 => $u->Permalink])?>" class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->

    </div><!-- /.row -->

</section><!-- /.content -->