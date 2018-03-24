@extends('layouts.app')

@section('heading')
    Willkommen in der Ambulanz 3.0!
@endsection

@section('content')
 
 <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Betreute Patienten</p>
                                            23
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-timer"></i> In dieser Woche
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-headphone-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Betreuende Ärzte</p>
                                            5
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Täglich in der Hotline
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

 <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-support"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Aufnahmen gesamt<br></p>
                                            19.223
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> In 2016
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

<div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-bar-chart-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Anzahl der Operationen</p>
                                            10.169
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> In 2016
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

<div class="col-lg-12 col-md-7">
                        <div class="card">
                           <!--  <div class="header">
                                <h4 class="title">Willkommen in der Ambulanz 3.0!</h4>
                            </div> -->
                            <div class="content">
                                <form>
                                    <div class="row">
                                        
                                        
                                        <div class="col-md-12">
                                           
    In der Ambulanz 3.0 haben Sie die Möglichkeit, sich vor Ihrem Besuch im Orthopädischen Spital Speising, von einem unserer Ärzte beraten zu lassen. <br><br>

    Bei uns sind Sie richtig, wenn Sie eine kompetente Abklärung Ihrer Schmerzen, Beeinträchtigungen bzw. Probleme am Bewegungsapparat benötigen, die jedoch nicht von einer frischen Verletzung nach einem Unfall herrühren. Unsere Experten nehmen sich gerne Zeit für Sie. <br><br>

Bitte beachten Sie, dass Sie Folgendes benötigen, um unsere Ambulanz aufsuchen zu können: <br>

Einen Termin. <br>
- Vereinbaren Sie diesen bitte unter TEL +43 1 801 82 1240 oder unter www.oss.at/termin <br>
- Eine Überweisung eines niedergelassenen Facharztes für Orthopädie. <br>
- Beim Besuch in der Ambulanz nehmen Sie bitte Ihre E-Card und einen amtl. Lichtbildausweis mit. <br>
- Wenn Sie das erste Mal zu unserer Ambulanz kommen, nehmen Sie bitte auch alle Röntgen-, CT- und MRT-Bilder sowie Befunde, die die entsprechend zu untersuchende Region betreffen, mit. <br>
- Wenn Sie die Wirbelsäulen-Ambulanz aufsuchen wollen, benötigen wir auf jeden Fall ein MRT-Bild sowie ein Röntgenbild. <br><br>
Vielen herzlichen Dank.
                                        </div>

                                       <!--  <div>
                                            <p class="imgzentriert">
                                            <img src="http://127.0.0.1:8000/img/SpineLine.gif" width="700" height="300" alt="Ambulanz 3.0">
                                            </p>
                                        </div> -->
                                    </div>                                   
                                </form>
                            </div>
                        </div>
                    </div>

    
@endsection
