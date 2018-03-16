<div id="alteracoes_crista">
  <div class="form-group row">
    <label class="col-md-12 col-form-label font-weight-bold">ALTERAÇÕES EM CRISTA ÓSSEA ALVEOLAR</label>
  </div>
  <div class="custom-controls-stacked">
    <label class="custom-control custom-radio">
      <input name="alteracoes-crista" onchange="alteracoes('crista');" type="radio" value="Sem alterações" class="custom-control-input alteracoes-crista">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Sem alterações</span>
    </label>
    <label class="custom-control custom-radio">
      <input name="alteracoes-crista" onchange="alteracoes('crista');" type="radio" value="Com alterações" class="custom-control-input alteracoes-crista">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Com alterações</span>
    </label>
  </div>
</div>
<div id="alt_crista" style="display:none">

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#perdaosseageneralizadacollapse" aria-expanded="false" aria-controls="perdaosseageneralizadacollapse" style="margin-bottom: 20px;">Perda óssea generalizada</a>
    <div id="perdaosseageneralizadacollapse" class="collapse">

      <div class="form-group row">
        <label for="perdaosseageneralizada" class="col-md-2 col-form-label">Perda óssea generalizada</label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="perdaosseageneralizada" id="perdaosseageneralizada">
            <option value="">Selecionar...</option>
            <option value="horizontal">Horizontal</option>
            <option value="vertical">Vertical</option>
          </select>
        </div>
      </div>
      <div class="form-group row perdag-invisible" style="display: none;">
        <label class="col-md-2 col-form-label"></label>
        <div class="col-md-10">
          <select class="form-control custom-select" name="perdaosseageneralizada2" id="perdaosseageneralizada2">
            <option value="">Selecionar...</option>
            <option value="discreta">Discreta</option>
            <option value="moderada">Moderada</option>
            <option value="severa">Severa</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  
  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#perdaossealocalizadavcollapse" aria-expanded="false" aria-controls="perdaossealocalizadavcollapse" style="margin-bottom: 20px;">Perda óssea localizada vertical</a>
    <div id="perdaossealocalizadavcollapse" class="collapse">
      <div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente11">
            <p class="nomedente">11</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="11_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="11_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="11_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="11_l">
            </div>
          </div>
          <div class="dente dente12">
            <p class="nomedente">12</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="12_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="12_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="12_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="12_l">
            </div>
          </div>
          <div class="dente dente13">
            <p class="nomedente">13</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="13_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="13_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="13_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="13_l">
            </div>
          </div>
          <div class="dente dente14">
            <p class="nomedente">14</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="14_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="14_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="14_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="14_l">
            </div>
          </div>
          <div class="dente dente15">
            <p class="nomedente">15</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="15_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="15_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="15_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="15_l">
            </div>
          </div>
          <div class="dente dente16">
            <p class="nomedente">16</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="16_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="16_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="16_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="16_l">
            </div>
          </div>
          <div class="dente dente17">
            <p class="nomedente">17</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="17_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="17_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="17_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="17_l">
            </div>
          </div>
          <div class="dente dente18">
            <p class="nomedente">18</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="18_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="18_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="18_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="18_p">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente21">
            <p class="nomedente">21</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="21_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="21_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="21_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="21_p">
            </div>
          </div>
          <div class="dente dente22">
            <p class="nomedente">22</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="22_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="22_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="22_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="22_p">
            </div>
          </div>
          <div class="dente dente23">
            <p class="nomedente">23</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="23_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="23_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="23_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="23_p">
            </div>
          </div>
          <div class="dente dente24">
            <p class="nomedente">24</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="24_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="24_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="24_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="24_p">
            </div>
          </div>
          <div class="dente dente25">
            <p class="nomedente">25</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="25_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="25_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="25_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="25_p">
            </div>
          </div>
          <div class="dente dente26">
            <p class="nomedente">26</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="26_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="26_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="26_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="26_p">
            </div>
          </div>
          <div class="dente dente27">
            <p class="nomedente">27</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="27_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="27_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="27_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="27_p">
            </div>
          </div>
          <div class="dente dente28">
            <p class="nomedente">28</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="28_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="28_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="28_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="28_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente51">
            <p class="nomedente">51</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="51_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="51_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="51_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="51_p">
            </div>
          </div>
          <div class="dente dente52">
            <p class="nomedente">52</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="52_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="52_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="52_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="52_p">
            </div>
          </div>
          <div class="dente dente53">
            <p class="nomedente">53</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="53_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="53_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="53_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="53_p">
            </div>
          </div>
          <div class="dente dente54">
            <p class="nomedente">54</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="54_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="54_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="54_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="54_p">
            </div>
          </div>
          <div class="dente dente55">
            <p class="nomedente">55</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="55_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="55_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="55_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="55_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente61">
            <p class="nomedente">61</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="61_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="61_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="61_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="61_p">
            </div>
          </div>
          <div class="dente dente62">
            <p class="nomedente">62</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="62_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="62_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="62_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="62_p">
            </div>
          </div>
          <div class="dente dente63">
            <p class="nomedente">63</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="63_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="63_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="63_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="63_p">
            </div>
          </div>
          <div class="dente dente64">
            <p class="nomedente">64</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="64_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="64_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="64_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="64_p">
            </div>
          </div>
          <div class="dente dente65">
            <p class="nomedente">65</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="65_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="65_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestsup">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="65_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav palat">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="65_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente81">
            <p class="nomedente">81</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="81_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="81_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="81_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="81_v">
            </div>
          </div>
          <div class="dente dente82">
            <p class="nomedente">82</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="82_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="82_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="82_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="82_v">
            </div>
          </div>
          <div class="dente dente83">
            <p class="nomedente">83</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="83_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="83_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="83_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="83_v">
            </div>
          </div>
          <div class="dente dente84">
            <p class="nomedente">84</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="84_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="84_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="84_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="84_v">
            </div>
          </div>
          <div class="dente dente85">
            <p class="nomedente">85</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="85_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="85_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="85_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="85_v">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente71">
            <p class="nomedente">71</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="71_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="71_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="71_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="71_v">
            </div>
          </div>
          <div class="dente dente72">
            <p class="nomedente">72</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="72_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="72_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="72_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="72_v">
            </div>
          </div>
          <div class="dente dente73">
            <p class="nomedente">73</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="73_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="73_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="73_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="73_v">
            </div>
          </div>
          <div class="dente dente74">
            <p class="nomedente">74</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="74_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="74_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="74_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="74_v">
            </div>
          </div>
          <div class="dente dente75">
            <p class="nomedente">75</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="75_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="75_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="75_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="75_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente41">
            <p class="nomedente">41</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="41_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="41_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="41_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="41_v">
            </div>
          </div>
          <div class="dente dente42">
            <p class="nomedente">42</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="42_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="42_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="42_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="42_v">
            </div>
          </div>
          <div class="dente dente43">
            <p class="nomedente">43</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="43_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="43_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="43_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="43_v">
            </div>
          </div>
          <div class="dente dente44">
            <p class="nomedente">44</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="44_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="44_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="44_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="44_v">
            </div>
          </div>
          <div class="dente dente45">
            <p class="nomedente">45</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="45_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="45_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="45_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="45_v">
            </div>
          </div>
          <div class="dente dente46">
            <p class="nomedente">46</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="46_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="46_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="46_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="46_v">
            </div>
          </div>
          <div class="dente dente47">
            <p class="nomedente">47</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="47_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="47_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="47_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="47_v">
            </div>
          </div>
          <div class="dente dente48">
            <p class="nomedente">48</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distdir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="48_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesidir">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="48_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="48_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="48_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente31">
            <p class="nomedente">31</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="31_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="31_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="31_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="31_v">
            </div>
          </div>
          <div class="dente dente32">
            <p class="nomedente">32</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="32_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="32_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="32_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="32_v">
            </div>
          </div>
          <div class="dente dente33">
            <p class="nomedente">33</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="33_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="33_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="33_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="33_v">
            </div>
          </div>
          <div class="dente dente34">
            <p class="nomedente">34</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="34_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="34_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="34_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="34_v">
            </div>
          </div>
          <div class="dente dente35">
            <p class="nomedente">35</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="35_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="35_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="35_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="35_v">
            </div>
          </div>
          <div class="dente dente36">
            <p class="nomedente">36</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="36_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="36_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="36_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="36_v">
            </div>
          </div>
          <div class="dente dente37">
            <p class="nomedente">37</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="37_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="37_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="37_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="37_v">
            </div>
          </div>
          <div class="dente dente38">
            <p class="nomedente">38</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav distesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="38_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav mesiesq">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="38_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav ling">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="38_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadav vestinf">
              <input type="checkbox" name="perdaossealocalizadav[]" class="variavel" value="38_v">
            </div>
          </div>
        </div>
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input regaval" name="marcar_perdaossealocalizadav" onclick="marcar('perdaossealocalizadav');" id="marcar_perdaossealocalizadav">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Marcar/desmarcar todos</span>
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#perdaossealocalizadahcollapse" aria-expanded="false" aria-controls="perdaossealocalizadahcollapse" style="margin-bottom: 20px;">Perda óssea localizada horizontal</a>
    <div id="perdaossealocalizadahcollapse" class="collapse">
      <div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente11">
            <p class="nomedente">11</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="11_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="11_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="11_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="11_l">
            </div>
          </div>
          <div class="dente dente12">
            <p class="nomedente">12</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="12_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="12_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="12_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="12_l">
            </div>
          </div>
          <div class="dente dente13">
            <p class="nomedente">13</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="13_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="13_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="13_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="13_l">
            </div>
          </div>
          <div class="dente dente14">
            <p class="nomedente">14</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="14_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="14_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="14_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="14_l">
            </div>
          </div>
          <div class="dente dente15">
            <p class="nomedente">15</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="15_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="15_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="15_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="15_l">
            </div>
          </div>
          <div class="dente dente16">
            <p class="nomedente">16</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="16_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="16_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="16_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="16_l">
            </div>
          </div>
          <div class="dente dente17">
            <p class="nomedente">17</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="17_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="17_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="17_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="17_l">
            </div>
          </div>
          <div class="dente dente18">
            <p class="nomedente">18</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="18_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="18_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="18_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="18_p">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente21">
            <p class="nomedente">21</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="21_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="21_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="21_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="21_p">
            </div>
          </div>
          <div class="dente dente22">
            <p class="nomedente">22</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="22_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="22_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="22_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="22_p">
            </div>
          </div>
          <div class="dente dente23">
            <p class="nomedente">23</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="23_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="23_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="23_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="23_p">
            </div>
          </div>
          <div class="dente dente24">
            <p class="nomedente">24</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="24_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="24_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="24_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="24_p">
            </div>
          </div>
          <div class="dente dente25">
            <p class="nomedente">25</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="25_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="25_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="25_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="25_p">
            </div>
          </div>
          <div class="dente dente26">
            <p class="nomedente">26</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="26_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="26_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="26_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="26_p">
            </div>
          </div>
          <div class="dente dente27">
            <p class="nomedente">27</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="27_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="27_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="27_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="27_p">
            </div>
          </div>
          <div class="dente dente28">
            <p class="nomedente">28</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="28_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="28_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="28_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="28_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente51">
            <p class="nomedente">51</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="51_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="51_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="51_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="51_p">
            </div>
          </div>
          <div class="dente dente52">
            <p class="nomedente">52</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="52_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="52_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="52_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="52_p">
            </div>
          </div>
          <div class="dente dente53">
            <p class="nomedente">53</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="53_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="53_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="53_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="53_p">
            </div>
          </div>
          <div class="dente dente54">
            <p class="nomedente">54</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="54_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="54_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="54_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="54_p">
            </div>
          </div>
          <div class="dente dente55">
            <p class="nomedente">55</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="55_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="55_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="55_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="55_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente61">
            <p class="nomedente">61</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="61_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="61_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="61_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="61_p">
            </div>
          </div>
          <div class="dente dente62">
            <p class="nomedente">62</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="62_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="62_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="62_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="62_p">
            </div>
          </div>
          <div class="dente dente63">
            <p class="nomedente">63</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="63_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="63_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="63_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="63_p">
            </div>
          </div>
          <div class="dente dente64">
            <p class="nomedente">64</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="64_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="64_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="64_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="64_p">
            </div>
          </div>
          <div class="dente dente65">
            <p class="nomedente">65</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="65_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="65_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestsup">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="65_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah palat">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="65_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente81">
            <p class="nomedente">81</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="81_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="81_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="81_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="81_v">
            </div>
          </div>
          <div class="dente dente82">
            <p class="nomedente">82</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="82_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="82_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="82_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="82_v">
            </div>
          </div>
          <div class="dente dente83">
            <p class="nomedente">83</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="83_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="83_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="83_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="83_v">
            </div>
          </div>
          <div class="dente dente84">
            <p class="nomedente">84</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="84_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="84_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="84_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="84_v">
            </div>
          </div>
          <div class="dente dente85">
            <p class="nomedente">85</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="85_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="85_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="85_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="85_v">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente71">
            <p class="nomedente">71</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="71_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="71_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="71_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="71_v">
            </div>
          </div>
          <div class="dente dente72">
            <p class="nomedente">72</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="72_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="72_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="72_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="72_v">
            </div>
          </div>
          <div class="dente dente73">
            <p class="nomedente">73</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="73_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="73_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="73_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="73_v">
            </div>
          </div>
          <div class="dente dente74">
            <p class="nomedente">74</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="74_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="74_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="74_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="74_v">
            </div>
          </div>
          <div class="dente dente75">
            <p class="nomedente">75</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="75_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="75_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="75_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="75_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente41">
            <p class="nomedente">41</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="41_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="41_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="41_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="41_v">
            </div>
          </div>
          <div class="dente dente42">
            <p class="nomedente">42</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="42_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="42_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="42_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="42_v">
            </div>
          </div>
          <div class="dente dente43">
            <p class="nomedente">43</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="43_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="43_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="43_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="43_v">
            </div>
          </div>
          <div class="dente dente44">
            <p class="nomedente">44</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="44_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="44_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="44_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="44_v">
            </div>
          </div>
          <div class="dente dente45">
            <p class="nomedente">45</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="45_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="45_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="45_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="45_v">
            </div>
          </div>
          <div class="dente dente46">
            <p class="nomedente">46</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="46_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="46_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="46_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="46_v">
            </div>
          </div>
          <div class="dente dente47">
            <p class="nomedente">47</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="47_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="47_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="47_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="47_v">
            </div>
          </div>
          <div class="dente dente48">
            <p class="nomedente">48</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distdir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="48_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesidir">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="48_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="48_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="48_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente31">
            <p class="nomedente">31</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="31_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="31_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="31_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="31_v">
            </div>
          </div>
          <div class="dente dente32">
            <p class="nomedente">32</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="32_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="32_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="32_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="32_v">
            </div>
          </div>
          <div class="dente dente33">
            <p class="nomedente">33</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="33_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="33_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="33_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="33_v">
            </div>
          </div>
          <div class="dente dente34">
            <p class="nomedente">34</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="34_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="34_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="34_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="34_v">
            </div>
          </div>
          <div class="dente dente35">
            <p class="nomedente">35</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="35_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="35_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="35_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="35_v">
            </div>
          </div>
          <div class="dente dente36">
            <p class="nomedente">36</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="36_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="36_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="36_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="36_v">
            </div>
          </div>
          <div class="dente dente37">
            <p class="nomedente">37</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="37_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="37_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="37_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="37_v">
            </div>
          </div>
          <div class="dente dente38">
            <p class="nomedente">38</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah distesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="38_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah mesiesq">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="38_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah ling">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="38_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral perdaossealocalizadah vestinf">
              <input type="checkbox" name="perdaossealocalizadah[]" class="variavel" value="38_v">
            </div>
          </div>
        </div>
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input regaval" name="marcar_perdaossealocalizadah" onclick="marcar('perdaossealocalizadah');" id="marcar_perdaossealocalizadah">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Marcar/desmarcar todos</span>
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#esfumacamentocollapse" aria-expanded="false" aria-controls="esfumacamentocollapse" style="margin-bottom: 20px;">Esfumaçamento</a>
    <div id="esfumacamentocollapse" class="collapse">
      <div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente11">
            <p class="nomedente">11</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="11_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="11_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="11_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="11_l">
            </div>
          </div>
          <div class="dente dente12">
            <p class="nomedente">12</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="12_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="12_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="12_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="12_l">
            </div>
          </div>
          <div class="dente dente13">
            <p class="nomedente">13</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="13_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="13_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="13_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="13_l">
            </div>
          </div>
          <div class="dente dente14">
            <p class="nomedente">14</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="14_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="14_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="14_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="14_l">
            </div>
          </div>
          <div class="dente dente15">
            <p class="nomedente">15</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="15_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="15_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="15_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="15_l">
            </div>
          </div>
          <div class="dente dente16">
            <p class="nomedente">16</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="16_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="16_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="16_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="16_l">
            </div>
          </div>
          <div class="dente dente17">
            <p class="nomedente">17</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="17_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="17_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="17_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="17_l">
            </div>
          </div>
          <div class="dente dente18">
            <p class="nomedente">18</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="18_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="18_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="18_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="18_p">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente21">
            <p class="nomedente">21</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="21_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="21_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="21_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="21_p">
            </div>
          </div>
          <div class="dente dente22">
            <p class="nomedente">22</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="22_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="22_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="22_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="22_p">
            </div>
          </div>
          <div class="dente dente23">
            <p class="nomedente">23</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="23_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="23_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="23_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="23_p">
            </div>
          </div>
          <div class="dente dente24">
            <p class="nomedente">24</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="24_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="24_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="24_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="24_p">
            </div>
          </div>
          <div class="dente dente25">
            <p class="nomedente">25</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="25_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="25_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="25_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="25_p">
            </div>
          </div>
          <div class="dente dente26">
            <p class="nomedente">26</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="26_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="26_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="26_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="26_p">
            </div>
          </div>
          <div class="dente dente27">
            <p class="nomedente">27</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="27_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="27_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="27_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="27_p">
            </div>
          </div>
          <div class="dente dente28">
            <p class="nomedente">28</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="28_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="28_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="28_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="28_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente51">
            <p class="nomedente">51</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="51_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="51_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="51_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="51_p">
            </div>
          </div>
          <div class="dente dente52">
            <p class="nomedente">52</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="52_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="52_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="52_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="52_p">
            </div>
          </div>
          <div class="dente dente53">
            <p class="nomedente">53</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="53_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="53_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="53_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="53_p">
            </div>
          </div>
          <div class="dente dente54">
            <p class="nomedente">54</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="54_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="54_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="54_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="54_p">
            </div>
          </div>
          <div class="dente dente55">
            <p class="nomedente">55</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="55_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="55_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="55_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="55_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente61">
            <p class="nomedente">61</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="61_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="61_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="61_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="61_p">
            </div>
          </div>
          <div class="dente dente62">
            <p class="nomedente">62</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="62_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="62_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="62_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="62_p">
            </div>
          </div>
          <div class="dente dente63">
            <p class="nomedente">63</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="63_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="63_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="63_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="63_p">
            </div>
          </div>
          <div class="dente dente64">
            <p class="nomedente">64</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="64_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="64_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="64_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="64_p">
            </div>
          </div>
          <div class="dente dente65">
            <p class="nomedente">65</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="65_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="65_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestsup">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="65_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento palat">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="65_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente81">
            <p class="nomedente">81</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="81_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="81_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="81_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="81_v">
            </div>
          </div>
          <div class="dente dente82">
            <p class="nomedente">82</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="82_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="82_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="82_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="82_v">
            </div>
          </div>
          <div class="dente dente83">
            <p class="nomedente">83</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="83_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="83_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="83_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="83_v">
            </div>
          </div>
          <div class="dente dente84">
            <p class="nomedente">84</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="84_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="84_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="84_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="84_v">
            </div>
          </div>
          <div class="dente dente85">
            <p class="nomedente">85</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="85_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="85_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="85_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="85_v">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente71">
            <p class="nomedente">71</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="71_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="71_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="71_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="71_v">
            </div>
          </div>
          <div class="dente dente72">
            <p class="nomedente">72</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="72_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="72_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="72_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="72_v">
            </div>
          </div>
          <div class="dente dente73">
            <p class="nomedente">73</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="73_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="73_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="73_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="73_v">
            </div>
          </div>
          <div class="dente dente74">
            <p class="nomedente">74</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="74_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="74_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="74_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="74_v">
            </div>
          </div>
          <div class="dente dente75">
            <p class="nomedente">75</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="75_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="75_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="75_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="75_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente41">
            <p class="nomedente">41</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="41_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="41_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="41_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="41_v">
            </div>
          </div>
          <div class="dente dente42">
            <p class="nomedente">42</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="42_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="42_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="42_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="42_v">
            </div>
          </div>
          <div class="dente dente43">
            <p class="nomedente">43</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="43_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="43_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="43_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="43_v">
            </div>
          </div>
          <div class="dente dente44">
            <p class="nomedente">44</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="44_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="44_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="44_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="44_v">
            </div>
          </div>
          <div class="dente dente45">
            <p class="nomedente">45</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="45_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="45_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="45_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="45_v">
            </div>
          </div>
          <div class="dente dente46">
            <p class="nomedente">46</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="46_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="46_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="46_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="46_v">
            </div>
          </div>
          <div class="dente dente47">
            <p class="nomedente">47</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="47_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="47_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="47_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="47_v">
            </div>
          </div>
          <div class="dente dente48">
            <p class="nomedente">48</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distdir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="48_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesidir">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="48_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="48_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="48_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente31">
            <p class="nomedente">31</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="31_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="31_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="31_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="31_v">
            </div>
          </div>
          <div class="dente dente32">
            <p class="nomedente">32</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="32_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="32_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="32_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="32_v">
            </div>
          </div>
          <div class="dente dente33">
            <p class="nomedente">33</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="33_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="33_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="33_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="33_v">
            </div>
          </div>
          <div class="dente dente34">
            <p class="nomedente">34</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="34_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="34_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="34_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="34_v">
            </div>
          </div>
          <div class="dente dente35">
            <p class="nomedente">35</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="35_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="35_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="35_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="35_v">
            </div>
          </div>
          <div class="dente dente36">
            <p class="nomedente">36</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="36_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="36_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="36_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="36_v">
            </div>
          </div>
          <div class="dente dente37">
            <p class="nomedente">37</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="37_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="37_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="37_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="37_v">
            </div>
          </div>
          <div class="dente dente38">
            <p class="nomedente">38</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral esfumacamento distesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="38_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento mesiesq">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="38_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento ling">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="38_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral esfumacamento vestinf">
              <input type="checkbox" name="esfumacamento[]" class="variavel" value="38_v">
            </div>
          </div>
        </div>
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input regaval" name="marcar_esfumacamento" onclick="marcar('esfumacamento');" id="marcar_esfumacamento">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Marcar/desmarcar todos</span>
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#endoperiocollapse" aria-expanded="false" aria-controls="endoperiocollapse" style="margin-bottom: 20px;">Endopério</a>
    <div id="endoperiocollapse" class="collapse">
      <div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente11">
            <p class="nomedente">11</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="11_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="11_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="11_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="11_l">
            </div>
          </div>
          <div class="dente dente12">
            <p class="nomedente">12</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="12_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="12_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="12_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="12_l">
            </div>
          </div>
          <div class="dente dente13">
            <p class="nomedente">13</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="13_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="13_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="13_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="13_l">
            </div>
          </div>
          <div class="dente dente14">
            <p class="nomedente">14</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="14_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="14_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="14_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="14_l">
            </div>
          </div>
          <div class="dente dente15">
            <p class="nomedente">15</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="15_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="15_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="15_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="15_l">
            </div>
          </div>
          <div class="dente dente16">
            <p class="nomedente">16</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="16_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="16_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="16_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="16_l">
            </div>
          </div>
          <div class="dente dente17">
            <p class="nomedente">17</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="17_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="17_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="17_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="17_l">
            </div>
          </div>
          <div class="dente dente18">
            <p class="nomedente">18</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="18_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="18_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="18_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="18_p">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente21">
            <p class="nomedente">21</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="21_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="21_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="21_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="21_p">
            </div>
          </div>
          <div class="dente dente22">
            <p class="nomedente">22</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="22_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="22_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="22_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="22_p">
            </div>
          </div>
          <div class="dente dente23">
            <p class="nomedente">23</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="23_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="23_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="23_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="23_p">
            </div>
          </div>
          <div class="dente dente24">
            <p class="nomedente">24</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="24_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="24_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="24_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="24_p">
            </div>
          </div>
          <div class="dente dente25">
            <p class="nomedente">25</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="25_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="25_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="25_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="25_p">
            </div>
          </div>
          <div class="dente dente26">
            <p class="nomedente">26</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="26_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="26_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="26_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="26_p">
            </div>
          </div>
          <div class="dente dente27">
            <p class="nomedente">27</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="27_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="27_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="27_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="27_p">
            </div>
          </div>
          <div class="dente dente28">
            <p class="nomedente">28</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="28_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="28_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="28_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="28_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente51">
            <p class="nomedente">51</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="51_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="51_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="51_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="51_p">
            </div>
          </div>
          <div class="dente dente52">
            <p class="nomedente">52</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="52_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="52_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="52_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="52_p">
            </div>
          </div>
          <div class="dente dente53">
            <p class="nomedente">53</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="53_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="53_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="53_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="53_p">
            </div>
          </div>
          <div class="dente dente54">
            <p class="nomedente">54</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="54_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="54_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="54_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="54_p">
            </div>
          </div>
          <div class="dente dente55">
            <p class="nomedente">55</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="55_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="55_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="55_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="55_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente61">
            <p class="nomedente">61</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="61_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="61_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="61_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="61_p">
            </div>
          </div>
          <div class="dente dente62">
            <p class="nomedente">62</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="62_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="62_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="62_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="62_p">
            </div>
          </div>
          <div class="dente dente63">
            <p class="nomedente">63</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="63_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="63_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="63_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="63_p">
            </div>
          </div>
          <div class="dente dente64">
            <p class="nomedente">64</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="64_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="64_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="64_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="64_p">
            </div>
          </div>
          <div class="dente dente65">
            <p class="nomedente">65</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="65_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="65_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestsup">
              <input type="checkbox" name="endoperio[]" class="variavel" value="65_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio palat">
              <input type="checkbox" name="endoperio[]" class="variavel" value="65_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente81">
            <p class="nomedente">81</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="81_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="81_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="81_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="81_v">
            </div>
          </div>
          <div class="dente dente82">
            <p class="nomedente">82</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="82_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="82_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="82_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="82_v">
            </div>
          </div>
          <div class="dente dente83">
            <p class="nomedente">83</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="83_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="83_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="83_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="83_v">
            </div>
          </div>
          <div class="dente dente84">
            <p class="nomedente">84</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="84_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="84_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="84_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="84_v">
            </div>
          </div>
          <div class="dente dente85">
            <p class="nomedente">85</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="85_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="85_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="85_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="85_v">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente71">
            <p class="nomedente">71</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="71_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="71_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="71_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="71_v">
            </div>
          </div>
          <div class="dente dente72">
            <p class="nomedente">72</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="72_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="72_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="72_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="72_v">
            </div>
          </div>
          <div class="dente dente73">
            <p class="nomedente">73</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="73_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="73_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="73_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="73_v">
            </div>
          </div>
          <div class="dente dente74">
            <p class="nomedente">74</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="74_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="74_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="74_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="74_v">
            </div>
          </div>
          <div class="dente dente75">
            <p class="nomedente">75</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="75_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="75_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="75_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="75_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente41">
            <p class="nomedente">41</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="41_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="41_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="41_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="41_v">
            </div>
          </div>
          <div class="dente dente42">
            <p class="nomedente">42</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="42_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="42_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="42_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="42_v">
            </div>
          </div>
          <div class="dente dente43">
            <p class="nomedente">43</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="43_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="43_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="43_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="43_v">
            </div>
          </div>
          <div class="dente dente44">
            <p class="nomedente">44</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="44_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="44_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="44_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="44_v">
            </div>
          </div>
          <div class="dente dente45">
            <p class="nomedente">45</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="45_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="45_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="45_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="45_v">
            </div>
          </div>
          <div class="dente dente46">
            <p class="nomedente">46</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="46_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="46_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="46_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="46_v">
            </div>
          </div>
          <div class="dente dente47">
            <p class="nomedente">47</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="47_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="47_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="47_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="47_v">
            </div>
          </div>
          <div class="dente dente48">
            <p class="nomedente">48</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distdir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="48_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesidir">
              <input type="checkbox" name="endoperio[]" class="variavel" value="48_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="48_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="48_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente31">
            <p class="nomedente">31</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="31_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="31_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="31_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="31_v">
            </div>
          </div>
          <div class="dente dente32">
            <p class="nomedente">32</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="32_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="32_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="32_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="32_v">
            </div>
          </div>
          <div class="dente dente33">
            <p class="nomedente">33</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="33_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="33_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="33_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="33_v">
            </div>
          </div>
          <div class="dente dente34">
            <p class="nomedente">34</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="34_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="34_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="34_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="34_v">
            </div>
          </div>
          <div class="dente dente35">
            <p class="nomedente">35</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="35_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="35_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="35_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="35_v">
            </div>
          </div>
          <div class="dente dente36">
            <p class="nomedente">36</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="36_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="36_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="36_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="36_v">
            </div>
          </div>
          <div class="dente dente37">
            <p class="nomedente">37</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="37_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="37_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="37_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="37_v">
            </div>
          </div>
          <div class="dente dente38">
            <p class="nomedente">38</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral endoperio distesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="38_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio mesiesq">
              <input type="checkbox" name="endoperio[]" class="variavel" value="38_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio ling">
              <input type="checkbox" name="endoperio[]" class="variavel" value="38_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral endoperio vestinf">
              <input type="checkbox" name="endoperio[]" class="variavel" value="38_v">
            </div>
          </div>
        </div>
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input regaval" name="marcar_endoperio" onclick="marcar('endoperio');" id="marcar_endoperio">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Marcar/desmarcar todos</span>
        </label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#lesao_furcacollapse" aria-expanded="false" aria-controls="lesao_furcacollapse" style="margin-bottom: 20px;">Lesão de furca</a>
    <div id="lesao_furcacollapse" class="collapse">
      <div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente11">
            <p class="nomedente">11</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="11_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="11_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="11_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="11_l">
            </div>
          </div>
          <div class="dente dente12">
            <p class="nomedente">12</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="12_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="12_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="12_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="12_l">
            </div>
          </div>
          <div class="dente dente13">
            <p class="nomedente">13</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="13_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="13_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="13_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="13_l">
            </div>
          </div>
          <div class="dente dente14">
            <p class="nomedente">14</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="14_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="14_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="14_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="14_l">
            </div>
          </div>
          <div class="dente dente15">
            <p class="nomedente">15</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="15_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="15_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="15_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="15_l">
            </div>
          </div>
          <div class="dente dente16">
            <p class="nomedente">16</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="16_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="16_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="16_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="16_l">
            </div>
          </div>
          <div class="dente dente17">
            <p class="nomedente">17</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="17_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="17_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="17_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="17_l">
            </div>
          </div>
          <div class="dente dente18">
            <p class="nomedente">18</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="18_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="18_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="18_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="18_p">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente21">
            <p class="nomedente">21</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="21_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="21_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="21_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="21_p">
            </div>
          </div>
          <div class="dente dente22">
            <p class="nomedente">22</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="22_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="22_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="22_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="22_p">
            </div>
          </div>
          <div class="dente dente23">
            <p class="nomedente">23</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="23_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="23_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="23_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="23_p">
            </div>
          </div>
          <div class="dente dente24">
            <p class="nomedente">24</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="24_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="24_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="24_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="24_p">
            </div>
          </div>
          <div class="dente dente25">
            <p class="nomedente">25</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="25_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="25_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="25_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="25_p">
            </div>
          </div>
          <div class="dente dente26">
            <p class="nomedente">26</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="26_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="26_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="26_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="26_p">
            </div>
          </div>
          <div class="dente dente27">
            <p class="nomedente">27</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="27_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="27_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="27_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="27_p">
            </div>
          </div>
          <div class="dente dente28">
            <p class="nomedente">28</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="28_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="28_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="28_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="28_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente51">
            <p class="nomedente">51</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="51_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="51_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="51_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="51_p">
            </div>
          </div>
          <div class="dente dente52">
            <p class="nomedente">52</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="52_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="52_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="52_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="52_p">
            </div>
          </div>
          <div class="dente dente53">
            <p class="nomedente">53</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="53_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="53_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="53_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="53_p">
            </div>
          </div>
          <div class="dente dente54">
            <p class="nomedente">54</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="54_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="54_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="54_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="54_p">
            </div>
          </div>
          <div class="dente dente55">
            <p class="nomedente">55</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="55_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="55_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="55_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="55_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente61">
            <p class="nomedente">61</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="61_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="61_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="61_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="61_p">
            </div>
          </div>
          <div class="dente dente62">
            <p class="nomedente">62</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="62_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="62_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="62_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="62_p">
            </div>
          </div>
          <div class="dente dente63">
            <p class="nomedente">63</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="63_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="63_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="63_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="63_p">
            </div>
          </div>
          <div class="dente dente64">
            <p class="nomedente">64</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="64_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="64_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="64_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="64_p">
            </div>
          </div>
          <div class="dente dente65">
            <p class="nomedente">65</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">V</p>
            <p class="nomedentepz">P</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="65_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="65_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestsup">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="65_v">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca palat">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="65_p">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente81">
            <p class="nomedente">81</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="81_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="81_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="81_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="81_v">
            </div>
          </div>
          <div class="dente dente82">
            <p class="nomedente">82</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="82_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="82_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="82_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="82_v">
            </div>
          </div>
          <div class="dente dente83">
            <p class="nomedente">83</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="83_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="83_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="83_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="83_v">
            </div>
          </div>
          <div class="dente dente84">
            <p class="nomedente">84</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="84_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="84_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="84_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="84_v">
            </div>
          </div>
          <div class="dente dente85">
            <p class="nomedente">85</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="85_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="85_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="85_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="85_v">
            </div>
          </div>
        </div>
        <div class="col-md-6 deciduo" style="margin-top:20px;">
          <div class="dente dente71">
            <p class="nomedente">71</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="71_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="71_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="71_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="71_v">
            </div>
          </div>
          <div class="dente dente72">
            <p class="nomedente">72</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="72_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="72_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="72_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="72_v">
            </div>
          </div>
          <div class="dente dente73">
            <p class="nomedente">73</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="73_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="73_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="73_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="73_v">
            </div>
          </div>
          <div class="dente dente74">
            <p class="nomedente">74</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="74_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="74_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="74_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="74_v">
            </div>
          </div>
          <div class="dente dente75">
            <p class="nomedente">75</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="75_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="75_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="75_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="75_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente41">
            <p class="nomedente">41</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="41_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="41_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="41_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="41_v">
            </div>
          </div>
          <div class="dente dente42">
            <p class="nomedente">42</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="42_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="42_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="42_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="42_v">
            </div>
          </div>
          <div class="dente dente43">
            <p class="nomedente">43</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="43_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="43_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="43_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="43_v">
            </div>
          </div>
          <div class="dente dente44">
            <p class="nomedente">44</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="44_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="44_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="44_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="44_v">
            </div>
          </div>
          <div class="dente dente45">
            <p class="nomedente">45</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="45_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="45_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="45_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="45_v">
            </div>
          </div>
          <div class="dente dente46">
            <p class="nomedente">46</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="46_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="46_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="46_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="46_v">
            </div>
          </div>
          <div class="dente dente47">
            <p class="nomedente">47</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="47_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="47_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="47_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="47_v">
            </div>
          </div>
          <div class="dente dente48">
            <p class="nomedente">48</p>
            <p class="nomedentedz">D</p>
            <p class="nomedentemz">M</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distdir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="48_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesidir">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="48_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="48_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="48_v">
            </div>
          </div>
        </div>
        <div class="col-md-6" style="margin-top:20px;">
          <div class="dente dente31">
            <p class="nomedente">31</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="31_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="31_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="31_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="31_v">
            </div>
          </div>
          <div class="dente dente32">
            <p class="nomedente">32</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="32_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="32_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="32_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="32_v">
            </div>
          </div>
          <div class="dente dente33">
            <p class="nomedente">33</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="33_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="33_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="33_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="33_v">
            </div>
          </div>
          <div class="dente dente34">
            <p class="nomedente">34</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="34_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="34_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="34_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="34_v">
            </div>
          </div>
          <div class="dente dente35">
            <p class="nomedente">35</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="35_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="35_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="35_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="35_v">
            </div>
          </div>
          <div class="dente dente36">
            <p class="nomedente">36</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="36_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="36_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="36_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="36_v">
            </div>
          </div>
          <div class="dente dente37">
            <p class="nomedente">37</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="37_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="37_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="37_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="37_v">
            </div>
          </div>
          <div class="dente dente38">
            <p class="nomedente">38</p>
            <p class="nomedentedz">M</p>
            <p class="nomedentemz">D</p>
            <p class="nomedentevz">L</p>
            <p class="nomedentepz">V</p>
            <div onclick="return marcacampo(this);" class="geral lesao_furca distesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="38_d">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca mesiesq">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="38_m">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca ling">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="38_l">
            </div>
            <div onclick="return marcacampo(this);" class="geral lesao_furca vestinf">
              <input type="checkbox" name="lesao_furca[]" class="variavel" value="38_v">
            </div>
          </div>
        </div>
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input regaval" name="marcar_lesao_furca" onclick="marcar('lesao_furca');" id="marcar_lesao_furca">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">Marcar/desmarcar todos</span>
        </label>
      </div>
    </div>
  </div>

</div>

<script type="text/javascript">
 $( "#perdaosseageneralizada" ).change(function() {
  var perda = $("#perdaosseageneralizada").val();
  if(perda == "horizontal" || perda == "vertical"){
    $(".perdag-invisible").css("display","block");
  } else {
    $(".perdag-invisible").css("display","none");
  }
});

 $( "#parestesiatm" ).change(function() {
  var tipo = $("#parestesiatm").val();
  if(tipo == "Sim"){
    $(".parestesiatm-invisible").css("display","block");
  } else{
    $(".parestesiatm-invisible").css("display","none");
  }
});

 $( "#nodulotm" ).change(function() {
  var tipo = $("#nodulotm").val();
  if(tipo == "Sim - móvel" || tipo == "Sim - fixo"){
    $(".nodulotm-invisible").css("display","block");
  } else{
    $(".nodulotm-invisible").css("display","none");
  }
});

 $( "#localizacaotm" ).change(function() {
  var tipo = $("#localizacaotm").val();
  if(tipo == "Abaixo do ângulo da mandíbula"){
    $(".localizacaotm-invisible").css("display","block");
  } else{
    $(".localizacaotm-invisible").css("display","none");
  }
});

 $( "#localizacaoto" ).change(function() {
  var tipo = $("#localizacaoto").val();
  if(tipo == "Outra"){
    $(".outralocalizacaoto-invisible").css("display","block");
  } else{
    $(".outralocalizacaoto-invisible").css("display","none");
  }
});

 $( "#centro_lesaoto" ).change(function() {
  var tipo = $("#centro_lesaoto").val();
  if(tipo == "Outro"){
    $(".outrocentroto-invisible").css("display","block");
  } else{
    $(".outrocentroto-invisible").css("display","none");
  }
});

 $( "#maior_diametroto" ).change(function() {
  var tipo = $("#maior_diametroto").val();
  if(tipo == "Maior que 3cm"){
    $(".maiordiametroto-invisible").css("display","block");
  } else{
    $(".maiordiametroto-invisible").css("display","none");
  }
});

 $( "#conteudo_aspectoto" ).change(function() {
  var tipo = $("#conteudo_aspectoto").val();
  if(tipo == "Radiolúcido - multilocular"){
    $(".conteudoaspectoto-invisible").css("display","block");
  } else{
    $(".conteudoaspectoto-invisible").css("display","none");
  }
});

 $( "#contem_dentesto" ).change(function() {
  var tipo = $("#contem_dentesto").val();
  if(tipo == "Sim - um" || tipo == "Sim - dois ou mais"){
    $(".contemdentesto-invisible").css("display","block");
  } else{
    $(".contemdentesto-invisible").css("display","none");
  }
});
</script>