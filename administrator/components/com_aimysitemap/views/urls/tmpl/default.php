<?php
/*
 * Copyright (c) 2014-2015 Aimy Extensions, Lingua-Systems Software GmbH
 *
 * http://www.aimy-extensions.com/
 *
 * License: GNU GPLv2, see LICENSE.txt within distribution and/or
 *          http://www.aimy-extensions.com/software-license.html
 */
 defined( '_JEXEC' ) or die(); try { JHtml::_( 'jquery.framework' ); JHtml::_( version_compare( JVERSION, '3.3.0', 'lt' ) ? 'behavior.framework' : 'behavior.core' ); } catch ( Exception $e ) { } require_once( JPATH_COMPONENT . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'rights.php' ); $jlang = JFactory::getLanguage(); $langs = array( array( 'val' => '*', 'name' => JText::_( 'JALL_LANGUAGE' ) ) ); foreach ( $jlang->getKnownLanguages() as $k => $a ) { $langs[] = array( 'val' => $a[ 'tag' ], 'name' => $a[ 'name' ] ); } $list_order = $this->escape( $this->state->get( 'list.ordering' ) ); $list_dir = $this->escape( $this->state->get( 'list.direction' ) ); ?>

<form action="<?php
 echo JRoute::_( 'index.php?option=com_aimysitemap&view=urls' ); ?>" method="post" name="adminForm" id="adminForm" class="clearfix">

<div id="view-toolbar" class="btn-toolbar clearfix">
    <div class="btn-group pull-left filter-search">
        <label for="filter_search" class="element-invisible"><?php
 echo JText::_( 'AIMY_SM_FILTER_SEARCH' ); ?></label>
        <input type="text" name="filter_search" id="filter_search"
            placeholder="<?php
 echo htmlspecialchars( JText::_( 'AIMY_SM_FILTER_SEARCH' ) ); ?>" value="<?php
 echo $this->escape( $this->state->get( 'filter.search' ) ); ?>" title="<?php
 echo htmlspecialchars( JText::_( 'AIMY_SM_FILTER_SEARCH' ) ); ?>" />
    </div>
    <div class="btn-group pull-left">
        <button class="btn hasTooltip" type="submit" title="<?php
 echo JText::_( 'JSEARCH_FILTER_SUBMIT' ); ?>"><i class="icon-search"></i></button>
        <button class="btn hasTooltip" type="button" title="<?php
 echo JText::_( 'JSEARCH_FILTER_CLEAR' ); ?>" onclick="<?php
 echo "jQuery( '#filter_search' ).val( '' );", "jQuery( '#adminForm' ).submit();"; ?>"><i class="icon-remove"></i></button>
    </div>


    <div class="btn-group pull-left">
        <label for="filter_state" class="element-invisible"><?php
 echo JText::_( 'AIMY_SM_FILTER_SELECT_STATE' ); ?></label>
        <select id="filter_state" name="filter_state" onchange="this.form.submit();">
            <option value=""><?php
 echo ' - ', JText::_( 'AIMY_SM_FILTER_SELECT_STATE' ), ' - '; ?></option>
            <?php
 echo JHtml::_( 'select.options', $this->get_state_options(), 'value', 'text', $this->state->get( 'filter.state' ), true ); ?>
        </select>
    </div>


    <div class="btn-group pull-right hidden-phone">
        <label for="limit" class="element-invisible"><?php
 echo JText::_( 'JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC' ); ?></label>
        <?php echo $this->pagination->getLimitBox(); ?>
    </div>
</div>

<div id="j-main-container" class="clearfix">
    <table class="table table-striped" id="urls_list">
        <thead>
            <tr>
                <th class="hidden-phone" style="width:1%;">
                    <input type="checkbox" name="checkall-toggle" value=""
                        title="<?php
 echo htmlspecialchars( JText::_( 'JGLOBAL_CHECK_ALL' ) ); ?>" onclick="Joomla.checkAll(this)" />
                </th>
                <th class="url">
                    <?php
 echo JHtml::_( 'grid.sort', 'AIMY_SM_URL_LBL', 'a.url', $list_dir, $list_order ); ?>
                </th>
                <th class="state">
                    <?php
 echo JHtml::_( 'grid.sort', 'AIMY_SM_STATE_LBL', 'a.state', $list_dir, $list_order ); ?>
                </th>
                <th class="priority">
                    <?php
 echo JHtml::_( 'grid.sort', 'AIMY_SM_PRIO_LBL', 'a.priority', $list_dir, $list_order ); ?>
                </th>
                <th class="mtime hidden-phone">
                    <?php
 echo JHtml::_( 'grid.sort', 'AIMY_SM_MTIME_LBL', 'a.mtime', $list_dir, $list_order ); ?>
                </th>
                <th class="changefreq hidden-phone">
                    <?php
 echo JHtml::_( 'grid.sort', 'AIMY_SM_CHANGEFREQ_LBL', 'a.changefreq', $list_dir, $list_order ); ?>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ( $this->items as $i => $item ) : ?>
            <tr class="row<?php echo $i % 2; ?>">
                <td class="center hidden-phone">
                    <?php
 echo JHtml::_( 'grid.id', $i, $item->id ); ?>
                </td>
                <td class="url nowrap has-context">
                    <?php
 if ( $this->allow_edit ) { echo '<a href="' . JRoute::_( 'index.php?option=com_aimysitemap&' . 'task=url.edit&' . JSession::getFormToken() . '=1&' . 'id=' . (int) $item->id ) . '">'; } else { echo '<tt>'; } echo htmlspecialchars( $item->url, ENT_COMPAT, 'UTF-8', false ); echo $this->allow_edit ? '</a>' : '</tt>'; ?>
                    <?php if ( ! empty( $item->title ) ) : ?>
                    <div class="title hidden-phone">
                        <small><?php
 echo JText::_( 'AIMY_SM_TITLE_LBL' ), ': "', htmlspecialchars( $item->title, ENT_COMPAT, 'UTF-8', false ), '"'; ?></small>
                    </div>
                    <?php endif; ?>
                </td>


                <td class="state" data-initial-state="<?php
 echo $item->state; ?>">
                    <?php
 if ( $this->allow_edit ) { echo '<a href="', JRoute::_( 'index.php?option=com_aimysitemap&' . 'task=url.toggle_state&' . JSession::getFormToken() . '=1&' . 'id=' . (int) $item->id ), '" ', 'title="', htmlspecialchars( JText::_( $item->state != 1 ? 'AIMY_SM_ACTIVATE_LBL' : 'AIMY_SM_DEACTIVATE_LBL' ) ), '">'; } echo '<span class="icon-', ( $item->state == 1 ? 'publish' : 'unpublish' ), ( $this->allow_edit ? ' btn btn-micro' : '' ), '"></span>'; if ( $this->allow_edit ) { echo '</a>'; } ?>
                </td>


                <td class="priority">
                    <?php
 echo number_format( $item->priority, 1 ); ?>
                </td>
                <td class="mtime hidden-phone">
                    <?php
 if ( $item->mtime == 0 ) { echo "&mdash;"; } else { echo date( JText::_( 'AIMY_SM_DATE_FMT' ), $item->mtime ); } ?>
                </td>
                <td class="changefreq hidden-phone">
                    <?php
 echo JText::_( 'AIMY_SM_CF_' . strtoupper( $item->changefreq ) ); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="<?php
 echo 6; ?>" class="center">
                    <?php echo $this->pagination->getListFooter(); ?>
                </td>
            </tr>
        </tfoot>
    </table>

    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order" value="<?php
 echo $list_order; ?>" />
    <input type="hidden" name="filter_order_Dir" value="<?php
 echo $list_dir; ?>" />
    <?php echo JHtml::_( 'form.token' ); ?>
</div><!-- /#j-main-container -->
</form>


<script type="text/javascript">
jQuery(document).ready(function(){
    Joomla.submitbutton = function( task )
    {
        if ( task == 'urls.reset_index' )
        {
            var submit = confirm( <?php
 echo json_encode( JText::_( 'AIMY_SM_MSG_CONFIRM_RESET_INDEX' ) ); ?> );

            if ( ! submit ) return false;
        }

        Joomla.submitform( task );
    };
});
</script>


<?php if ( $this->allow_edit && $this->ajax_edit ) : ?>

<script type="text/javascript">
jQuery( document ).ready(function(){
    AimySitemapAjaxEdit(
        <?php
 echo json_encode( array( 'state' => array( 'activate' => JText::_( 'AIMY_SM_ACTIVATE_LBL' ), 'deactivate' => JText::_( 'AIMY_SM_DEACTIVATE_LBL' ) ), 'changefreq' => array( 'always' => JText::_( 'AIMY_SM_CF_ALWAYS' ), 'hourly' => JText::_( 'AIMY_SM_CF_HOURLY' ), 'daily' => JText::_( 'AIMY_SM_CF_DAILY' ), 'weekly' => JText::_( 'AIMY_SM_CF_WEEKLY' ), 'monthly' => JText::_( 'AIMY_SM_CF_MONTHLY' ), 'yearly' => JText::_( 'AIMY_SM_CF_YEARLY' ), 'never' => JText::_( 'AIMY_SM_CF_NEVER' ) ) ) ); ?>,
        '<?php
 echo JSession::getFormToken(); ?>',
        <?php
 echo json_encode( array() ); ?>
    );
});
</script>

<?php endif; ?>


<?php if ( empty( $this->items ) ) : ?>

<div class="clearfix"></div>
<div class="padded-tb">
    <a class="btn btn-lg btn-primary"
        href="index.php?option=com_aimysitemap&amp;view=crawl"
        title="<?php
 echo htmlspecialchars( JText::_( 'AIMY_SM_CRAWL_DSC' ) ); ?>"><?php
 echo JText::_( 'AIMY_SM_CRAWL_LBL' ); ?></a>
</div>

<script type="text/javascript">
jQuery( document ).ready(function(){
    jQuery( '#toolbar-file button, #toolbar-trash button' ).each(function()
    {
        jQuery( this ).prop( 'disabled', 'disabled' );
    });
});
</script>

<?php endif; ?>


<?php
 include_once( JPATH_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_aimysitemap' . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'footer.php' ); 
