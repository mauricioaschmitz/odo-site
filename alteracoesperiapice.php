<div id="alteracoes_periapice">
  <div class="form-group row">
    <label class="col-md-12 col-form-label font-weight-bold">ALTERAÇÕES EM PERIÁPICE</label>
  </div>
  <div class="custom-controls-stacked">
    <label class="custom-control custom-radio">
      <input name="alteracoes-periapice" onchange="alteracoes('periapice');" type="radio" value="Sem alterações" class="custom-control-input alteracoes-periapice">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Sem alterações</span>
    </label>
    <label class="custom-control custom-radio">
      <input name="alteracoes-periapice" onchange="alteracoes('periapice');" type="radio" value="Com alterações" class="custom-control-input alteracoes-periapice">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Com alterações</span>
    </label>
  </div>
</div>
<div id="alt_periapice" style="display:none">

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#espessamento_espaco_ligamentocollapse" aria-expanded="false" aria-controls="espessamento_espaco_ligamentocollapse" style="margin-bottom: 20px;">Espessamento do espaço do ligamento periodontal</a>
    <div id="espessamento_espaco_ligamentocollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradpsupb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triradmvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento triraddvsup2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinfb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento monoradb">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biradminf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espessamento_espaco_ligamento biraddinf2b">
            <input type="checkbox" name="espessamento_espaco_ligamento[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_espessamento_espaco_ligamento" onclick="marcar('espessamento_espaco_ligamento');" id="marcar_espessamento_espaco_ligamento">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#continuidade_lamina_duracollapse" aria-expanded="false" aria-controls="continuidade_lamina_duracollapse" style="margin-bottom: 20px;">Solução de continuidade da lâmina dura</a>
    <div id="continuidade_lamina_duracollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradpsupb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triradmvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura triraddvsup2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinfb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura monoradb">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biradminf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral continuidade_lamina_dura biraddinf2b">
            <input type="checkbox" name="continuidade_lamina_dura[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_continuidade_lamina_dura" onclick="marcar('continuidade_lamina_dura');" id="marcar_continuidade_lamina_dura">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#area_radiolucida_apicalcollapse" aria-expanded="false" aria-controls="area_radiolucida_apicalcollapse" style="margin-bottom: 20px;">Área radiolúcida apical</a>
    <div id="area_radiolucida_apicalcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradpsupb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triradmvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical triraddvsup2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinfb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical monoradb">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biradminf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiolucida_apical biraddinf2b">
            <input type="checkbox" name="area_radiolucida_apical[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_area_radiolucida_apical" onclick="marcar('area_radiolucida_apical');" id="marcar_area_radiolucida_apical">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#area_radiopaca_apicalcollapse" aria-expanded="false" aria-controls="area_radiopaca_apicalcollapse" style="margin-bottom: 20px;">Área radiopaca apical</a>
    <div id="area_radiopaca_apicalcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradpsupb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triradmvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical triraddvsup2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinfb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical monoradb">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biradminf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral area_radiopaca_apical biraddinf2b">
            <input type="checkbox" name="area_radiopaca_apical[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_area_radiopaca_apical" onclick="marcar('area_radiopaca_apical');" id="marcar_area_radiopaca_apical">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
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