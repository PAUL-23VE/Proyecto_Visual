<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.11.0/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.11.0/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery-easyui-1.11.0/themes/color.css">
    <script type="text/javascript" src="jquery-easyui-1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery-easyui-1.11.0/jquery.easyui.min.js"></script>
</head>
<body>
    <h2>MANEJO ESTUDIANTES</h2>

    <div style="display: flex; justify-content: center; align-items: center; padding: 35px;">
    <table id="dg" title="Estudiantes" class="easyui-datagrid" style="width:700px;height:250px"
            url="MODELS/acceder.php"
            toolbar="#toolbar" pagination="true"
            rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="estCedula" width="50">Cedula</th>
                <th field="estNombre" width="50">Nombre</th>
                <th field="estApellido" width="50">Apellido</th>
                <th field="estTelefono" width="50">Telefono</th>
                <th field="estDireccion" width="50">Direccion</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nuevo </a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar</a>
        <a href="Reportes/Fpdf/Reportes.php" class="easyui-linkbutton" iconCls="icon-remove" plain="true" >fpdf Repo</a>
        <a href="Reportes/Ireport/Ireport.php" class="easyui-linkbutton" iconCls="icon-remove" plain="true" >Ireport </a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="ReportePersonal()">IreportCedula</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar </a>
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3>Datos estudiante</h3>
            <div style="margin-bottom:10px">
                <input name="estCedula" class="easyui-textbox" required="true" label="Cedula:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estNombre" class="easyui-textbox" required="true" label="Nombre:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estApellido" class="easyui-textbox" required="true" label="Apellido:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estTelefono" class="easyui-textbox" required="true" label="Telefono:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="estDireccion" class="easyui-textbox" required="true" label="Direccion:" style="width:100%">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>
    <script type="text/javascript">

        function ReportePersonal() {
            var row = $( '#dg' ).datagrid( 'getSelected' );
            if ( row ) {
                url = 'Reportes/ReporteCedula/ReporteCedula.php?estCedula=' + row.estCedula;
                window.open( url, '_blank' );
            }
        }
        
        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New User');
            $('#fm').form('clear');
            url = 'MODELS/guardar.php';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit User');
                $('#fm').form('load',row);
                url = 'MODELS/editar.php?EST_CED='+row.EST_CED;
            }
        }
        function saveUser(){
            $('#fm').form('submit',{
                url: url,
                iframe: false,
                onSubmit: function(){
                    return $(this).form('validate');
                },
                success: function(result){
                    var result = eval('('+result+')');
                    if (result.errorMsg){
                        $.messager.show({
                            title: 'Error',
                            msg: result.errorMsg
                        });
                    } else {
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
                    if (r){
                        $.post('MODELS/borrar.php',{CED:row.EST_CED},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
                                    title: 'Error',
                                    msg: result.errorMsg
                                });
                            }
                        },'json');
                    }
                });
            }
        }
    </script>
</body>
</html>