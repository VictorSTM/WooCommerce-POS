<div>
  <div class="dropdown">
    <input type="text" class="form-control" placeholder="<?php /* translators: woocommerce */ _e( 'Search customers', 'woocommerce' ); ?>">
    <div class="dropdown-menu list customers-list"></div>
  </div>
</div>
<div>
  {{#if customer_id}}<a href="#" data-action="remove" title="<?php /* translators: wordpress */ _e( 'Remove' ); ?>"><i class="icon-remove"></i></a> {{/if}}
  {{formatCustomerName customer}}
</div>