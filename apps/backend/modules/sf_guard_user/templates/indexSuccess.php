<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sf_guard_user/assets') ?>

<div class="row large-12">
    <div id="sf_admin_container">
        <h1><?php echo __('Lista de usuarios', array(), 'messages') ?></h1>

        <?php include_partial('sf_guard_user/flashes') ?>

        <div id="sf_admin_header">
            <?php include_partial('sf_guard_user/list_header', array('pager' => $pager)) ?>
        </div>
            <div class="panel">
            <?php include_partial('sf_guard_user/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
        </div>   
        
        
        <div class="large-12">
            <div class="panel">
            <form action="<?php echo url_for('sf_guard_user_collection', array('action' => 'batch')) ?>" method="post">
                <?php include_partial('sf_guard_user/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
                <ul class="sf_admin_actions">
                    <?php include_partial('sf_guard_user/list_batch_actions', array('helper' => $helper)) ?>
                    <?php include_partial('sf_guard_user/list_actions', array('helper' => $helper)) ?>
                </ul>
            </form>
            </div>
        </div>

        <div id="sf_admin_footer">
            <?php include_partial('sf_guard_user/list_footer', array('pager' => $pager)) ?>
        </div>
    </div>
</div>
