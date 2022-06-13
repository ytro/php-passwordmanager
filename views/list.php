<!--
Author: Yann Trottier
File  : views/list.php
Desc. : Main page loaded by controller on start. Displays passwords table.
-->

<div class="container">
    <div id="header"><h3>Password manager</h3></div>
    <div id="box">
        
        <!-- Begin Table -->
        <table class="table table-striped table-bordered table-condensed table-hover">
            <!-- Table header -->
            <thead>
            <tr class="first-row">
                <th><span>Name</span></th>
                <th>View</th>
                <th>Delete</th>
            </tr>
            </thead>

            <!-- Main table -->
            <tbody>
            <?php for ($i = 0; $i < count($data); $i++): reset($actions); ?>
                <tr>
                <td><span class="passname"><?php echo $data[$i]['password_name'];?></span></td>
                <?php while($action = current($actions)):?>
                    <td class="action"><a class="btn btn-primary <?php echo key($actions); ?>" data-toggle="modal" tohref="<?php echo $action . $data[$i]['password_id']; ?>">
                    <?php echo key($actions); next($actions); ?>
                    </a></td>
                <?php endwhile; ?>
                </tr>
            <?php endfor; ?>
            </tbody>
        </table>
        <!-- End table -->
        
        <a id="addPassword" class="btn btn-default" data-toggle="modal" tohref="<?php echo $create ?>">Add Password</a>
        
    </div>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Content will be inserted here by jQuery function -->
        </div>
    </div>
</div>
