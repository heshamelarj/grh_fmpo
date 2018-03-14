

$( document ).ready(function() {



    //Date Picker & Combobox

    $('.dp').click(function () {
        $('.dp').datepicker({
            dateFormat: "yy-mm-dd"

        });

    });

    $('.dp').on('change', function(){

        $('.datepicker').hide();
    });




    /*SEARCH AJAX*/

    $("#btn_search").click(function (e) {
        e.preventDefault();


        var ppr_=$('#searchInput').val();



                $.ajax({
                    type: 'post',
                    url: '/GRH/Home/search/',
                    data: {ppr: ppr_},
                    success: function () {
                        if($('.tbl-result tbody tr').has('td').length=0)
                        {
                         $('.hidden h1').removeClass('hidden');


                        }

                        if($('.tbl-result tbody tr').has('td').length>0)
                        {

                            $('.tbl-result tbody tr td').remove();

                                $('.tbl tr').each(function () {
                                    $(this).removeClass('hidden');
                                })

                        }

                        var html=$('.tbl tr'+'#'+ppr_).html();
                        $('.tbl tr'+'#'+ppr_).addClass('hidden');

                        $('.tbl-result tbody tr').eq(0).append(html);




                        //$('.tbl tr'+'#'+ppr_).addClass('highlight');
                    }
                });



    });

    function highlighted()
    {

        $('.tbl-result tbody').toggleClass('highlight');

    }

    setInterval(highlighted,1000);

    $('.highlight').click(function () {
       $(this).removeClass('highlight');
    });






    $('button.save').click(function () {


        var id=$('.editConge ').attr('id');
        var type_id=$('#'+id+'.type_conge').val();
        var date_debut=$('#'+id+'.date_debut').val();
        var date_fin=$('#'+id+'.date_fin').val();
        var nbr_jr=$('#'+id+'.nbr_jr').val();
        var date_reprise=$('#'+id+'.date_reprise').val();
        var annee=$('#'+id+'.annee').val();


        $.ajax({
            type:'POST',
            url:'/GRH/home/updateConge/',
            data:{id:id,type_id:type_id,date_debut:date_debut,date_fin:date_fin,nbr_jr:nbr_jr,date_reprise:date_reprise,annee:annee},
            success: function () {
                alert("Modifié Avec Success");

            }

        })


    });
    $('button.update_grade').click(function () {


        var id=$('.edit_grade').attr('id');


            var grade=$('#'+id+'.grade').val();
        var date_nm_grd=$('#'+id+'.date_nm_grd').val();
        var categorie=$('#'+id+'.categorie').val();

        var date_nm_cat=$('#'+id+'.date_nm_cat').val();

        var echelon=$('#'+id+'.echelon').val();

        var date_effect_ech=$('#'+id+'.date_effect_ech').val();





        $.ajax({
            type:'POST',
            url:'/GRH/home/updateGrade/',
            data:{id:id,grade:grade,date_nm_grd:date_nm_grd,categorie:categorie,date_nm_cat:date_nm_cat,echelon:echelon,date_effect_ech:date_effect_ech},
            success: function () {
                alert("Modifié Avec Success");

            }

        })

    });



    $('button.deleteEns').click(function(e) {

            e.preventDefault();
            var parent = $(this).parent();
            var ppr_=parent.parent().attr('id');



            $.ajax({
                type: 'get',
                url: '/GRH/home/deleteEnsiegnant/',
                data: {ppr_: ppr_},
                beforeSend: function() {
                    parent.parent().animate({'backgroundColor':'#fb6c6c'},300);
                },
                success: function() {
                    parent.parent().slideUp(300,function() {
                        parent.parent().remove();
                    });
                }
            });


    });
    /*FONCTIONNAIRE DELETE */
    $('button.deleteFonc').click(function(e) {
        if(confirm('Voulez Vous Supprimer?'))
        {
            e.preventDefault();
            var parent = $(this).parent();
            var ppr_=parent.parent().attr('id');



            $.ajax({
                type: 'get',
                url: '/GRH/home/deleteAdmin/',
                data: {ppr_: ppr_},
                beforeSend: function() {
                    parent.parent().animate({'backgroundColor':'#fb6c6c'},300);
                },
                success: function() {
                    parent.parent().slideUp(300,function() {
                        parent.parent().remove();
                    });
                }
            });
        }

    });

    /*CONGE*/
    //Add Using Ajax





        $("#showModal").click(function(){




             $("#showModal").modal("show");


        });


        //tabs
        $("#Tabs").tabs({
            collapsible:true,
            event:'click',
            heightStyle:'auto',
            show:'fadeIn',
            hide:'fadeOut',
            active:'0'
        });
        $("#tabNewConge").tabs({

            collapsible:true,
            event:'click',
            heightStyle:'auto',
            show:'fadeIn',
            hide:'fadeOut',
            active:'none'
        });
    $("#tabNewGrade").tabs({
        collapsible:true,
        event:'click',
        heightStyle:'auto',
        show:'fadeIn',
        hide:'fadeOut',
        active:'none'
    });

    /*Close Button*/








    $('.combobox').combobox();




        //Loading Data To Charts

        $.getJSON('chartData', function (data) {


            var chart = new CanvasJS.Chart("chartContainer1", {
                backgroundColor:"#393939",
                color:"#393939",

                title:{text:"STATISTIQUES",fontColor:"#ffffff"},
                axisY: {
                    title:"",
                    labelFontSize: 12,
                    labelFontColor: "#ffffff",

                },
                axisX: {
                    labelAngle: -30,
                    labelFontSize: 20,
                    labelFontColor: "#ffffff"
                },animationEnabled:true,

                data: [
                    {

                        type: "column",

                        indexLabelPlacement:"outside",
                        indexLabelOrientation:"horizontal",

                        dataPoints: [
                            { y: data[0].count,color:"#24C282", label: "FONCTIONNAIRE",indexLabel:"{y}" },
                            { y: data[1].count, color:"#149B91",label: "ENSEIGNANT",indexLabel:"{y}" },


                        ]

                    }
                ]
            });

            chart.render();




        });






            //Responsive Charts
            //Initial Charts Dimensions
    var ScreenWidth=$(window).width();

    if(ScreenWidth>1200)
    {
        $('#chartContainer1').css({"width":"100%","height":"100%"});
        $('#searchInput').css({"width":"310px"});
        $('.loginInput').css({"width":"100%"});
        $('.login-page').addClass('centerIt');

    }
    else if(ScreenWidth<=1200 && ScreenWidth>=992)
    {
        $('#chartContainer1').css({"width":"100%","height":"100%"});
        $('#searchInput').css({"width":"210px"});
        $('.loginInput').css({"width":"100%"});
        $('.loginSpan').css({"width":"50%"});
        $('.login-page').addClass('centerIt');





    }
    else if(ScreenWidth<992 && ScreenWidth>=768)
    {
        $('#chartContainer1').css({"width":"100%","height":"100%"});
        $('#searchInput').css({"width":"160px"});
        $('.loginInput').css({"width":"100%"});
        $('.loginSpan').css({"width":"50%"});
        $('.login-page').addClass('centerIt');



    }
    else if(ScreenWidth<768)
    {

        $('#chartContainer1').css({"width":"100%","height":"100%"});
        $('#searchInput').css({"width":"100px"});
        $('.loginInput').css({"width":"100%"});
        $('.loginSpan').css({"width":"50%"});
        $('.login-page').addClass('centerIt');







    }




        });
    $(window).resize(responsiveCharts);
    //$(window).resize(responsiveTableDate);




        function responsiveCharts(){
            var ScreenWidth=$(window).width();

            if(ScreenWidth>1200)
            {
                $('#chartContainer1').css({"width":"100%","height":"100%"});
                $('#searchInput').css({"width":"310px"});
                $('.loginInput').css({"width":"100%"});
                $('.login-page').addClass('centerIt');

            }
            else if(ScreenWidth<=1200 && ScreenWidth>=992)
            {
                $('#chartContainer1').css({"width":"100%","height":"100%"});
                $('#searchInput').css({"width":"210px"});
                $('.loginInput').css({"width":"100%"});
                $('.loginSpan').css({"width":"50%"});
                $('.login-page').addClass('centerIt');





            }
            else if(ScreenWidth<992 && ScreenWidth>=768)
            {
                $('#chartContainer1').css({"width":"100%","height":"100%"});
                $('#searchInput').css({"width":"160px"});
                $('.loginInput').css({"width":"100%"});
                $('.loginSpan').css({"width":"50%"});
                $('.login-page').addClass('centerIt');



            }
            else if(ScreenWidth<768)
            {

                $('#chartContainer1').css({"width":"100%","height":"100%"});
                $('#searchInput').css({"width":"100px"});
                $('.loginInput').css({"width":"100%"});
                $('.loginSpan').css({"width":"50%"});
                $('.login-page').addClass('centerIt');







            }

            //Initial Table Data Font


        }

$('.deleteConge').click(function(e) {

    e.preventDefault();
    var parent = $(this).parent();
    var id=parent.parent().attr('id');




    $.ajax({
        type: 'post',
        url: '/GRH/home/deleteConge/',
        data: {id: id},
        beforeSend: function() {
            parent.parent().animate({'backgroundColor':'#fb6c6c'},300);
        },
        success: function() {
            parent.parent().slideUp(300,function() {
                parent.parent().remove();
            });
        }
    });


});

$('.deleteGrade').click(function(e) {

    e.preventDefault();

    var parent = $(this).parent();
    var id=parent.parent().attr('id');




    $.ajax({
        type: 'post',
        url: '/GRH/home/deleteGrade/',
        data: {id: id},
        beforeSend: function() {
            parent.parent().animate({'backgroundColor':'#fb6c6c'},300);
        },
        success: function() {
            parent.parent().slideUp(300,function() {
                parent.parent().remove();
            });
        }
    });


});


$('a.edit_grade').click(function () {

var id=$(this).attr('id');

    var grade=$('#'+id+'.grade').val();
    $('.grade').attr('value',grade);
    var date_nm_grd=$('#'+id+'.date_nm_grd').val();
    $('.date_nm_grd').attr('value',date_nm_grd);
    var categorie=$('#'+id+'.categorie').val();
    $('.categorie').attr('value',categorie);

    var date_nm_cat=$('#'+id+'.date_nm_cat').val();
    $('.date_nm_cat').attr('value',date_nm_cat);

    var echelon=$('#'+id+'.echelon').val();
    $('.echelon').attr('value',echelon)

    var date_effect_ech=$('#'+id+'.date_effect_ech').val();
    $('.date_effect_ech').attr('value',date_effect_ech);





});
$('a.editConge').click(function () {

    var id=$(this).attr('id');
    var type_id=$('#'+id+'.type_conge').val();
    $('.type_conge').attr('value',type_id);
    var date_debut=$('#'+id+'.date_debut').val();
    $('.date_debut').attr('value',date_debut);

    var date_fin=$('#'+id+'.date_fin').val();
    $('.date_fin').attr('value',date_fin);

    var nbr_jr=$('#'+id+'.nbr_jr').val();
    $('.nbr_jr').attr('value',nbr_jr);

    var date_reprise=$('#'+id+'.date_reprise').val();
    $('.date_reprise').attr('value',date_reprise);

    var annee=$('#'+id+'.annee').val();
    $('.annee').attr('value',annee);





});


addCongee();
editConge();
editGrade();
deleteConfirmation();
addGrade();







