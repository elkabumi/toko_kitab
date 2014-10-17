<script type="text/javascript">	
$(function(){
	var otable = createTable({
		id 				: "#table",
		listSource 		: "cash_bank/cash_bank_table_controller",	
		formTarget		: "cash_bank/form",
		actionTarget	: "cash_bank/cash_bank_form_action",
		column_id 		: 0,
		filter_by 		: [ {id : "transaction_code", label : "Kode"}, {id : "transaction_type_name", label : "Tipe Transaksi"}]
	});

	otable.fnSetColumnVis(0, false, false);

});
</script>
<div id="apapun_namanya">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="table"> 
	<thead>
		<tr>
		  <th>ID</th>
          <th>Tanggal</th>
		  <th>Kode Transaksi </th>
		  <th>Tipe Transaksi</th>
		  <th>Keterangan</th>
		  <th>Debit</th>
		  <th>Kredit</th>
		
		</tr> 
	</thead> 
	<tbody>	
	</tbody>
</table>
<div id="panel" class="command_table">
	<input type="button" id="add" value="Tambah"/>
	<input type="button" id="edit" value="Revisi"/>
   
	<input type="button" id="refresh" value="Refresh"/>
</div>
</div>
