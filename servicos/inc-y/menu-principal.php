<?php
if(!$mapasite && !$menuRodape) { ?>
	<div class="menu">
		<!-- Logotipo e Telefone apenas para Mobile-->
		<div class="logo-mobile">
			<a href="<?=$url?>"><img src="<?=$url?>imagens-y/logomobile.png" alt="<?=$nomeSite?>" title="<?=$nomeSite?>"></a>
		</div>
		<div class="telefone-mobile">
			<strong><?php echo $ddd.' '.telefone($telefone); ?></strong>
		</div>
		<!-- Início do Menu-->
		<div class="base">
			<div class="menu-principal">
				<ul>
				<?php } ?>
				<li><a href="https://operah.com.br/" title="Página inicial">Home</a></li>
				<li><a href="https://operah.com.br/#sobre/" title="Sobre a Óperah Soluções">Sobre Nós<i class="fas fa-chevron-down"></i></a>
					<ul>
						<li><a href="https://operah.com.br/quem-somos/" class="elementor-sub-item">Quem Somos</a></li>	
						<li><a href="https://operah.com.br/o-que-oferecemos/" class="elementor-sub-item">O que oferecemos</a></li>	
						<li><a href="https://operah.com.br/missao-visao-e-valores/" class="elementor-sub-item">Missão, visão e valores</a></li>	
						<li><a href="https://operah.com.br/evolucao/" class="elementor-sub-item">Evolução</a></li>	
						<li><a href="https://operah.com.br/parceiros-e-aliancas/" class="elementor-sub-item">Parceiros e alianças</a></li>	
						<li><a href="https://operah.com.br/alguns-cases/" class="elementor-sub-item">Alguns cases</a></li>	
						<li><a href="https://operah.com.br/premios-reconhecimentos/" class="elementor-sub-item">Prêmio/reconhecimento</a></li>	
						<li><a href="https://operah.com.br/politica-de-privacidade/" class="elementor-sub-item">Política de privacidade</a></li>	
					</ul></li>
					<li><a href="https://operah.com.br/#solucoes/" title="Serviços - Óperah Soluções">Serviços<i class="fas fa-chevron-down"></i></a>
						<ul>
							<li><a href="https://operah.com.br/consultoria/" class="elementor-sub-item">Consultoria</a></li>
							<li><a href="https://operah.com.br/servicos-totvs/">Serviços TOTVS<span class="sub-arrow"><i class="fas fa-chevron-right"></i></span></a>
								<ul>
									<li><a href="https://operah.com.br/erp/" class="elementor-sub-item">ERP</a></li>
									<li><a href="https://operah.com.br/comex/" class="elementor-sub-item">Comex</a></li>
									<li><a href="https://operah.com.br/rh/" class="elementor-sub-item">RH</a></li>
									<li><a href="https://operah.com.br/fiscal/" class="elementor-sub-item">Fiscal</a></li>
									<li><a href="https://operah.com.br/revitalizacao/" class="elementor-sub-item">Revitalização</a></li>
									<li><a href="https://operah.com.br/faq/" class="elementor-sub-item">FAQ</a></li>
								</ul>
							</li>
							<li><a href="https://operah.com.br/banco-de-dados/" class="elementor-sub-item">Banco de dados</a></li>
							<li><a href="https://operah.com.br/solucoes-rh/">Soluções RH<span class="sub-arrow"><i class="fas fa-chevron-right"></i></span></a>
								<ul>
									<li><a href="https://operah.com.br/solucao-de-ponto-eletronico/" class="elementor-sub-item">APP Ponto eletrônico</a></li>
									<li><a href="https://operah.com.br/futuro-do-trabalho/" class="elementor-sub-item">Futuro do trabalho</a></li>
								</ul>
							</li>
							<li><a href="https://operah.com.br/seguranca-contra-invasores/" class="elementor-sub-item">Segurança contra invasores</a></li>
							<li><a href="https://operah.com.br/digital-marketing/" class="elementor-sub-item">Digital Marketing</a></li>
							<li><a href="https://operah.com.br/producao-audiovisual/">Produção audiovisual<span class="sub-arrow"><i class="fas fa-chevron-right"></i></span></a>
								<ul>
									<li><a href="https://operah.com.br/digital-marketing-2/" class="elementor-sub-item">Digital Marketing</a></li>
									<li><a href="https://operah.com.br/servicos-de-producao/" class="elementor-sub-item">Serviços de produção</a></li>
									<li><a href="https://operah.com.br/corporativo/" class="elementor-sub-item">Corporativo</a></li>
								</ul>
							</li>
							<li><a href="https://operah.com.br/projetos-personalizados/" class="elementor-sub-item">Projetos personalizados</a></li>

						</ul>
					</li>
					<li><a href="https://operah.com.br/#objetivos/" title="Objetivo - Óperah Soluções">Objetivo<i class="fas fa-chevron-down"></i></a>
						<ul>
							<li><a href="https://operah.com.br/beneficios/" class="elementor-sub-item">Benefícios</a></li>
							<li><a href="https://operah.com.br/vantagens/" class="elementor-sub-item">Vantagens</a></li>
						</ul>
					</li>
					<li><a href="https://operah.com.br/#responsabilidade/" title="Responsabilidade Social - Óperah Soluções">Responsabilidade Social</a></li>
					<?
					if(isset($menu)){
						?>
						<li class="relacionados">
							<a href="<?=$url.$urlAtividadesEmpresa?>" title="<?=$AtividadesEmpresa?> <?=$nomeSite?>"><?=$AtividadesEmpresa?></a>
							<ul>
								<?php echo retornaMenu("menuPrincipal"); ?>
							</ul>
						</li>
						<?
					}
					?> 
					<li><a rel="nofollow" href="https://operah.com.br/#contato/" title="Fale com a <?=$nomeSite?>">Contato</a></li>
					<?php
					if(!$mapasite && !$menuRodape) { ?>
					</ul>
				</div>
			</div>
		</div>
	<?php } ?>
