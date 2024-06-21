<?php


class Alertas
{

    public static function alerts($status)
    {
        switch ($status) {
            case "1":
                echo "<script>
            $(function() {
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: false,
                    timer: 3000
                });
            
                $('.toastrDefaultSuccess')
                toastr.success('Email enviado com sucesso');
            });
            
        </script>";
                break;
            case "2";
                echo "<script>
                $(function() {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                
                    $('.toastrDefaultInfo')
                    toastr.info('Erro ao enviar o email, contate o Jurandir 44 99747097');
                });
            </script>";
                break;
            case "3":
                echo "<script>
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    
                        $('.toastrDefaultError')
                        toastr.error('Senha ou Email Incorretos Contato o administrador do sistema');
                    });
                </script>";
                break;
            case "4":
                echo "<script>
                    $(function() {
                        var Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    
                        $('.toastrDefaultWarning')
                        toastr.warning('Exclusão realizada');
                    });
                </script>";
                break;
        }
    }
}
