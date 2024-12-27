<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic CRUD Application - jQuery EasyUI CRUD Demo</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <!--<link rel="stylesheet" type="text/css" href="jquery/themes/black/easyui.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="jquery/themes/color.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.easyui.min.js"></script>-->
</head>
<body>
    <h2>MANEJO ESTUDIANTES</h2>

    <div style="display: flex; justify-content: center; align-items: center; padding: 35px;">
        <table id="dg" title="ESTUDIANTES" class="easyui-datagrid" style="width:900px;height:300px;"
            url="MODELS/acceder.php" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true"
            singleSelect="true">
            <thead>
                <tr>
                    <th field="EST_CED" width="50">CEDULA</th>
                    <th field="EST_NOM" width="50">NOMBRE</th>
                    <th field="EST_APE" width="50">APELLIDO</th>
                    <th field="EST_TEL" width="50">TELEFONO</th>
                    <th field="EST_DIR" width="50">DIRECCION</th>
                </tr>
            </thead>
        </table>
    </div>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove User</a>
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" novalidate style="margin:0;padding:20px 50px">
            <h3>User Information</h3>
            <div style="margin-bottom:10px">
                <input name="EST_CED" class="easyui-textbox" required="true" label="CEDULA:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="EST_NOM" class="easyui-textbox" required="true" label="NOMBRE:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="EST_APE" class="easyui-textbox" required="true" label="APELLIDO:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="EST_TEL" class="easyui-textbox" required="true" label="TELEFONO:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="EST_DIR" class="easyui-textbox" required="true" label="DIRECCION:" style="width:100%">
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>
    <script type="text/javascript">
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