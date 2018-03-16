<div id="alteracoes_raiz">
  <div class="form-group row">
    <label class="col-md-12 col-form-label font-weight-bold">ALTERAÇÕES EM RAIZ</label>
  </div>
  <div class="custom-controls-stacked">
    <label class="custom-control custom-radio">
      <input name="alteracoes-raiz" onchange="alteracoes('raiz');" type="radio" value="Sem alterações" class="custom-control-input alteracoes-raiz">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Sem alterações</span>
    </label>
    <label class="custom-control custom-radio">
      <input name="alteracoes-raiz" onchange="alteracoes('raiz');" type="radio" value="Com alterações" class="custom-control-input alteracoes-raiz">
      <span class="custom-control-indicator"></span>
      <span class="custom-control-description">Com alterações</span>
    </label>
  </div>
</div>
<div id="alt_raiz" style="display:none">
  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Alterações radiolúcidas</label>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#rizogenese_incompletacollapse" aria-expanded="false" aria-controls="rizogenese_incompletacollapse" style="margin-bottom: 20px;">Rizogênese incompleta</a>
    <div id="rizogenese_incompletacollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradpsup">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triradmvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta triraddvsup2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta monorad">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biradminf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizogenese_incompleta biraddinf2">
            <input type="checkbox" name="rizogenese_incompleta[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_rizogenese_incompleta" onclick="marcar('rizogenese_incompleta');" id="marcar_rizogenese_incompleta">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#rizolisecollapse" aria-expanded="false" aria-controls="rizolisecollapse" style="margin-bottom: 20px;">Rizólise</a>
    <div id="rizolisecollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradpsup">
            <input type="checkbox" name="rizolise[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triradmvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral rizolise triraddvsup2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf">
            <input type="checkbox" name="rizolise[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral rizolise monorad">
            <input type="checkbox" name="rizolise[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral rizolise biradminf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral rizolise biraddinf2">
            <input type="checkbox" name="rizolise[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_rizolise" onclick="marcar('rizolise');" id="marcar_rizolise">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#reabsorcao_dentinaria_internacollapse" aria-expanded="false" aria-controls="reabsorcao_dentinaria_internacollapse" style="margin-bottom: 20px;">Reabsorção dentinária interna</a>
    <div id="reabsorcao_dentinaria_internacollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_interna biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_interna[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_reabsorcao_dentinaria_interna" onclick="marcar('reabsorcao_dentinaria_interna');" id="marcar_reabsorcao_dentinaria_interna">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#reabsorcao_dentinaria_externacollapse" aria-expanded="false" aria-controls="reabsorcao_dentinaria_externacollapse" style="margin-bottom: 20px;">Reabsorção dentinária externa</a>
    <div id="reabsorcao_dentinaria_externacollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradpsup">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triradmvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa triraddvsup2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa monorad">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biradminf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral reabsorcao_dentinaria_externa biraddinf2">
            <input type="checkbox" name="reabsorcao_dentinaria_externa[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_reabsorcao_dentinaria_externa" onclick="marcar('reabsorcao_dentinaria_externa');" id="marcar_reabsorcao_dentinaria_externa">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#canais_colateraiscollapse" aria-expanded="false" aria-controls="canais_colateraiscollapse" style="margin-bottom: 20px;">Canais colaterais</a>
    <div id="canais_colateraiscollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradpsup">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triradmvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais triraddvsup2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais monorad">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biradminf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral canais_colaterais biraddinf2">
            <input type="checkbox" name="canais_colaterais[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_canais_colaterais" onclick="marcar('canais_colaterais');" id="marcar_canais_colaterais">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#carie_radicularcollapse" aria-expanded="false" aria-controls="carie_radicularcollapse" style="margin-bottom: 20px;">Cárie radicular</a>
    <div id="carie_radicularcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradpsup">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triradmvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular triraddvsup2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular monorad">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biradminf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral carie_radicular biraddinf2">
            <input type="checkbox" name="carie_radicular[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_carie_radicular" onclick="marcar('carie_radicular');" id="marcar_carie_radicular">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#restauracao_radiolucidacollapse" aria-expanded="false" aria-controls="restauracao_radiolucidacollapse" style="margin-bottom: 20px;">Restauração radiolúcida</a>
    <div id="restauracao_radiolucidacollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradpsup">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triradmvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida triraddvsup2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida monorad">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biradminf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiolucida biraddinf2">
            <input type="checkbox" name="restauracao_radiolucida[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_restauracao_radiolucida" onclick="marcar('restauracao_radiolucida');" id="marcar_restauracao_radiolucida">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>


  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#fratura_radicularcollapse" aria-expanded="false" aria-controls="fratura_radicularcollapse" style="margin-bottom: 20px;">Fratura radicular</a>
    <div id="fratura_radicularcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradpsup">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triradmvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular triraddvsup2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular monorad">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biradminf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral fratura_radicular biraddinf2">
            <input type="checkbox" name="fratura_radicular[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_fratura_radicular" onclick="marcar('fratura_radicular');" id="marcar_fratura_radicular">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#perfuracaocollapse" aria-expanded="false" aria-controls="perfuracaocollapse" style="margin-bottom: 20px;">Perfuração</a>
    <div id="perfuracaocollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradpsup">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triradmvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral perfuracao triraddvsup2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral perfuracao monorad">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biradminf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral perfuracao biraddinf2">
            <input type="checkbox" name="perfuracao[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_perfuracao" onclick="marcar('perfuracao');" id="marcar_perfuracao">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#preparo_proteticocollapse" aria-expanded="false" aria-controls="preparo_proteticocollapse" style="margin-bottom: 20px;">Preparo protético</a>
    <div id="preparo_proteticocollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradpsup">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triradmvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico triraddvsup2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico monorad">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biradminf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral preparo_protetico biraddinf2">
            <input type="checkbox" name="preparo_protetico[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_preparo_protetico" onclick="marcar('preparo_protetico');" id="marcar_preparo_protetico">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#espaco_vaziocollapse" aria-expanded="false" aria-controls="espaco_vaziocollapse" style="margin-bottom: 20px;">Espaço vazio</a>
    <div id="espaco_vaziocollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradpsup">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triradmvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio triraddvsup2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio monorad">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biradminf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral espaco_vazio biraddinf2">
            <input type="checkbox" name="espaco_vazio[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_espaco_vazio" onclick="marcar('espaco_vazio');" id="marcar_espaco_vazio">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#apicetomiacollapse" aria-expanded="false" aria-controls="apicetomiacollapse" style="margin-bottom: 20px;">Apicetomia</a>
    <div id="apicetomiacollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradpsup">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triradmvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral apicetomia triraddvsup2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral apicetomia monorad">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biradminf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral apicetomia biraddinf2">
            <input type="checkbox" name="apicetomia[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_apicetomia" onclick="marcar('apicetomia');" id="marcar_apicetomia">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#restauracao_parietalcollapse" aria-expanded="false" aria-controls="restauracao_parietalcollapse" style="margin-bottom: 20px;">Restauração parietal</a>
    <div id="restauracao_parietalcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradpsup">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triradmvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal triraddvsup2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal monorad">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biradminf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_parietal biraddinf2">
            <input type="checkbox" name="restauracao_parietal[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_restauracao_parietal" onclick="marcar('restauracao_parietal');" id="marcar_restauracao_parietal">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-3 col-form-label font-weight-bold">Alterações radiopacas</label>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#restauracao_radiopacacollapse" aria-expanded="false" aria-controls="restauracao_radiopacacollapse" style="margin-bottom: 20px;">Restauração radiopaca</a>
    <div id="restauracao_radiopacacollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradpsup">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triradmvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca triraddvsup2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca monorad">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biradminf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral restauracao_radiopaca biraddinf2">
            <input type="checkbox" name="restauracao_radiopaca[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_restauracao_radiopaca" onclick="marcar('restauracao_radiopaca');" id="marcar_restauracao_radiopaca">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#tratamento_endodonticocollapse" aria-expanded="false" aria-controls="tratamento_endodonticocollapse" style="margin-bottom: 20px;">Tratamento endodôntico</a>
    <div id="tratamento_endodonticocollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradpsup">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triradmvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico triraddvsup2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico monorad">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biradminf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral tratamento_endodontico biraddinf2">
            <input type="checkbox" name="tratamento_endodontico[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_tratamento_endodontico" onclick="marcar('tratamento_endodontico');" id="marcar_tratamento_endodontico">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#retentor_intrarradicular_raizcollapse" aria-expanded="false" aria-controls="retentor_intrarradicular_raizcollapse" style="margin-bottom: 20px;">Retentor intrarradicular</a>
    <div id="retentor_intrarradicular_raizcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradpsup">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triradmvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz triraddvsup2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz monorad">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biradminf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral retentor_intrarradicular_raiz biraddinf2">
            <input type="checkbox" name="retentor_intrarradicular_raiz[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_retentor_intrarradicular_raiz" onclick="marcar('retentor_intrarradicular_raiz');" id="marcar_retentor_intrarradicular_raiz">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#obturacao_retrogradacollapse" aria-expanded="false" aria-controls="obturacao_retrogradacollapse" style="margin-bottom: 20px;">Obturação retrógrada</a>
    <div id="obturacao_retrogradacollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradpsup">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triradmvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda triraddvsup2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda monorad">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biradminf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral obturacao_retrograda biraddinf2">
            <input type="checkbox" name="obturacao_retrograda[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_obturacao_retrograda" onclick="marcar('obturacao_retrograda');" id="marcar_obturacao_retrograda">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#anquilosecollapse" aria-expanded="false" aria-controls="anquilosecollapse" style="margin-bottom: 20px;">Anquilose</a>
    <div id="anquilosecollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradpsup">
            <input type="checkbox" name="anquilose[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triradmvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral anquilose triraddvsup2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf">
            <input type="checkbox" name="anquilose[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral anquilose monorad">
            <input type="checkbox" name="anquilose[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral anquilose biradminf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral anquilose biraddinf2">
            <input type="checkbox" name="anquilose[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_anquilose" onclick="marcar('anquilose');" id="marcar_anquilose">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#atresia_conduto_radicularcollapse" aria-expanded="false" aria-controls="atresia_conduto_radicularcollapse" style="margin-bottom: 20px;">Atresia do conduto radicular</a>
    <div id="atresia_conduto_radicularcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradpsup">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triradmvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular triraddvsup2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular monorad">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biradminf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral atresia_conduto_radicular biraddinf2">
            <input type="checkbox" name="atresia_conduto_radicular[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_atresia_conduto_radicular" onclick="marcar('atresia_conduto_radicular');" id="marcar_atresia_conduto_radicular">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#calculo_raizcollapse" aria-expanded="false" aria-controls="calculo_raizcollapse" style="margin-bottom: 20px;">Cálculo dentário</a>
    <div id="calculo_raizcollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradpsup">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triradmvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz triraddvsup2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz monorad">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biradminf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral calculo_raiz biraddinf2">
            <input type="checkbox" name="calculo_raiz[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_calculo_raiz" onclick="marcar('calculo_raiz');" id="marcar_calculo_raiz">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#hipercementosecollapse" aria-expanded="false" aria-controls="hipercementosecollapse" style="margin-bottom: 20px;">Hipercementose</a>
    <div id="hipercementosecollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradpsup">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triradmvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral hipercementose triraddvsup2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral hipercementose monorad">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biradminf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral hipercementose biraddinf2">
            <input type="checkbox" name="hipercementose[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_hipercementose" onclick="marcar('hipercementose');" id="marcar_hipercementose">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#agulhas_calcicascollapse" aria-expanded="false" aria-controls="agulhas_calcicascollapse" style="margin-bottom: 20px;">Agulhas cálcicas</a>
    <div id="agulhas_calcicascollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradpsup">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triradmvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas triraddvsup2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas monorad">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biradminf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral agulhas_calcicas biraddinf2">
            <input type="checkbox" name="agulhas_calcicas[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_agulhas_calcicas" onclick="marcar('agulhas_calcicas');" id="marcar_agulhas_calcicas">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Marcar/desmarcar todos</span>
      </label>
    </div>
  </div>

  <div class="form-group row">
    <a class="col-md-12 col-form-label btn btn-primary" data-toggle="collapse" href="#instrumento_endodontico_fraturadocollapse" aria-expanded="false" aria-controls="instrumento_endodontico_fraturadocollapse" style="margin-bottom: 20px;">Instrumento endodôntico fraturado</a>
    <div id="instrumento_endodontico_fraturadocollapse" class="collapse">
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente11">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">11</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="11_mo">
          </div>
        </div>
        <div class="dente dente12">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">12</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="12_mo">
          </div>
        </div>
        <div class="dente dente13">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">13</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="13_mo">
          </div>
        </div>
        <div class="dente dente14">
          <p class="nomedente2">14</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="14_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="14_p">
          </div>
        </div>
        <div class="dente dente15">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">15</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="15_mo">
          </div>
        </div>
        <div class="dente dente16">
          <p class="nomedente2">16</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="16_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="16_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="16_dv">
          </div>
        </div>
        <div class="dente dente17">
          <p class="nomedente2">17</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="17_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="17_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="17_dv">
          </div>
        </div>
        <div class="dente dente18">
          <p class="nomedente2">18</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="18_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="18_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="18_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente21">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">21</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="21_mo">
          </div>
        </div>
        <div class="dente dente22">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">22</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="22_mo">
          </div>
        </div>
        <div class="dente dente23">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">23</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="23_mo">
          </div>
        </div>
        <div class="dente dente24">
          <p class="nomedente2">24</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -15px;margin-left: 6px;overflow: hidden;font-size: 13px;">V</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="24_v">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="24_p">
          </div>
        </div>
        <div class="dente dente25">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">25</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="25_mo">
          </div>
        </div>
        <div class="dente dente26">
          <p class="nomedente2">26</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="26_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="26_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="26_dv">
          </div>
        </div>
        <div class="dente dente27">
          <p class="nomedente2">27</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="27_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="27_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="27_dv">
          </div>
        </div>
        <div class="dente dente28">
          <p class="nomedente2">28</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="28_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="28_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="28_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente51">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">51</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="51_mo">
          </div>
        </div>
        <div class="dente dente52">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">52</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="52_mo">
          </div>
        </div>
        <div class="dente dente53">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">53</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="53_mo">
          </div>
        </div>
        <div class="dente dente54">
          <p class="nomedente2">54</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="54_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="54_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="54_dv">
          </div>
        </div>
        <div class="dente dente55">
          <p class="nomedente2">55</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="55_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="55_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="55_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente61">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">61</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="61_mo">
          </div>
        </div>
        <div class="dente dente62">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">62</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="62_mo">
          </div>
        </div>
        <div class="dente dente63">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">63</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="63_mo">
          </div>
        </div>
        <div class="dente dente64">
          <p class="nomedente2">64</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="64_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="64_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="64_dv">
          </div>
        </div>
        <div class="dente dente65">
          <p class="nomedente2">65</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: 10px;margin-left: 6px;overflow: hidden;font-size: 13px;">P</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradpsup">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="65_p">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: -9px;overflow: hidden;font-size: 10px;">MV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triradmvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="65_mv">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -13px;margin-left: 18px;overflow: hidden;font-size: 10px;">DV</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado triraddvsup2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="65_dv">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente81">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">81</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="81_mo">
          </div>
        </div>
        <div class="dente dente82">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">82</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="82_mo">
          </div>
        </div>
        <div class="dente dente83">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">83</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="83_mo">
          </div>
        </div>
        <div class="dente dente84">
          <p class="nomedente2">84</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="84_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="84_d">
          </div>
        </div>
        <div class="dente dente85">
          <p class="nomedente2">85</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="85_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="85_d">
          </div>
        </div>
      </div>
      <div class="col-md-6 deciduo" style="margin-top:20px;">
        <div class="dente dente71">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">71</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="71_mo">
          </div>
        </div>
        <div class="dente dente72">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">72</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="72_mo">
          </div>
        </div>
        <div class="dente dente73">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">73</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="73_mo">
          </div>
        </div>
        <div class="dente dente74">
          <p class="nomedente2">74</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="74_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="74_d">
          </div>
        </div>
        <div class="dente dente75">
          <p class="nomedente2">75</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -8px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="75_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="75_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente41">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">41</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="41_mo">
          </div>
        </div>
        <div class="dente dente42">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">42</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="42_mo">
          </div>
        </div>
        <div class="dente dente43">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">43</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="43_mo">
          </div>
        </div>
        <div class="dente dente44">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">44</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="44_mo">
          </div>
        </div>
        <div class="dente dente45">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">45</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="45_mo">
          </div>
        </div>
        <div class="dente dente46">
          <p class="nomedente2">46</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="46_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="46_d">
          </div>
        </div>
        <div class="dente dente47">
          <p class="nomedente2">47</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="47_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="47_d">
          </div>
        </div>
        <div class="dente dente48">
          <p class="nomedente2">48</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 19px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="48_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="48_d">
          </div>
        </div>
      </div>
      <div class="col-md-6" style="margin-top:20px;">
        <div class="dente dente31">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">31</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="31_mo">
          </div>
        </div>
        <div class="dente dente32">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">32</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="32_mo">
          </div>
        </div>
        <div class="dente dente33">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">33</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="33_mo">
          </div>
        </div>
        <div class="dente dente34">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">34</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="34_mo">
          </div>
        </div>
        <div class="dente dente35">
          <p class="nomedente" style="margin-left:5px;">R</p>
          <p class="nomedente2">35</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado monorad">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="35_mo">
          </div>
        </div>
        <div class="dente dente36">
          <p class="nomedente2">36</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="36_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="36_d">
          </div>
        </div>
        <div class="dente dente37">
          <p class="nomedente2">37</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="37_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="37_d">
          </div>
        </div>
        <div class="dente dente38">
          <p class="nomedente2">38</p>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: -7px;overflow: hidden;font-size: 13px;">M</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biradminf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="38_m">
          </div>
          <p class="nomedente" style="position: absolute;z-index: -1;margin-top: -5px;margin-left: 20px;overflow: hidden;font-size: 13px;">D</p>
          <div onclick="marcacampo(this);" class="geral instrumento_endodontico_fraturado biraddinf2">
            <input type="checkbox" name="instrumento_endodontico_fraturado[]" class="variavel" value="38_d">
          </div>
        </div>
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input regaval" name="marcar_instrumento_endodontico_fraturado" onclick="marcar('instrumento_endodontico_fraturado');" id="marcar_instrumento_endodontico_fraturado">
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