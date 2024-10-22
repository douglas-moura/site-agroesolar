<?php include_once './src/layouts/banner.php'; ?>

<section class="sessao bg-cinza-claro-2 relative overflow-hidden">
    <container class="conteudo mb-32 grid-cols-2">
        <div class="relative">
            <img src="./src/assets/img/engenheiro-com-placas.jpg" alt="" class="aspect-square rounded-lg object-cover" style="box-shadow:-20px 20px 0 #B3DE00;">
            <iconify-icon icon="lucide:chevrons-left" class="z-40 top-0 -right-8 text-9xl text-verde absolute"></iconify-icon>
        </div>
        <div class="coluna justify-center">
            <h2>Agrifotovoltáico</h2>
            <h4 class="font-extrabold">Agrifotovoltáico para agricultura mais produtiva</h4>
            <p class="mb-4">A Agro&Solar tem como missão promover a sustentabilidade e a eficiência energética, integrando a geração de energia solar com práticas agrícolas inovadoras. A empresa busca oferecer soluções acessíveis que beneficiem tanto os produtores rurais quanto o meio ambiente.</p>
            <p class="mb-4">Nossa visão é ser líder no mercado de energias renováveis, reconhecida pela excelência em tecnologias agrifotovoltaicas, contribuindo para um futuro mais sustentável e impulsionando a transformação do setor agrícola por meio da energia solar.</p>
            <p class="mb-4">Para tanto, participamos de uma pesquisa para desenvolvimento de todo o potencial nesse segmento, confira nosso projeto de aumento da produtividade da cana em Santa Clotilde.</p>
            <a href="http://"><strong class=" text-azul">Projeto Usina SANTA CLOTILDE</strong></a>
        </div>
    </container>
    <container class="conteudo grid-cols-2 ">
        <div class="coluna justify-center relative">
            <h2 class="flex items-center"><iconify-icon icon="lucide:sun" class="mr-4"></iconify-icon>Agrofotovoltaico</h2>
            <p class="mb-4">O sistema solar (agrifotovoltaico) consiste na geração de energia elétrica de origem solar concomitante com a produção agrícola.</p>
            <p class="mb-4">Utilizando esta sistemática, cai o principal argumento contra o uso da geração elétrica com energia solar, ou seja, a inutilização de terras férteis para agricultura.</p>
            <p class="mb-4">Ao contrário do que se pode imaginar, a redução da energia  solar incidente nas plantas pode melhorar a qualidade dos produtos agrícolas e aumentar a colheita.</p>
            <p class="mb-4">Pelo fato de o sistema manter temperaturas mais baixas, sombreamento parcial e maior umidade, altera o microclima da plantação e consegue-se obter redução significativa no uso de água pela diminuição da evapotranspiração e aumento da produtividade de várias lavouras em função da diminuição do stress causado pelo excesso de calor e de luminosidade.</p>
            <p class="mb-4">Seguem alguns exemplos ao lado:</p>
        </div>
        <div class="relative">
            <div class="relative m-auto w-full aspect-square">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides hidden h-full aspect-square transition-all duration-75 rounded-lg overflow-hidden">
                    <img src="./src/assets/img/img-slide-1.png" class="w-full h-full object-cover">
                    <div class="h-12 text-branco bg-preto text-xs leading-4 py-4 px-0 absolute bottom-4 w-full text-center">COREIA DO SUL - EXPERIMENTO COM PLANTAÇÃO DE BROCOLIS </div>
                </div>
                <div class="mySlides hidden h-full aspect-square transition-all duration-75 rounded-lg overflow-hidden">
                    <img src="./src/assets/img/img-slide-2.png" class="w-full h-full object-cover">
                    <div class="h-12 text-branco bg-preto text-xs leading-4 py-4 px-0 absolute bottom-4 w-full text-center">HOLANDA 3,8 HÁ DE FRAMBOESA – 2,7MW</div>
                </div>
                <div class="mySlides hidden h-full aspect-square transition-all duration-75 rounded-lg overflow-hidden">
                    <img src="./src/assets/img/img-slide-3.png" class="w-full h-full object-cover">
                    <div class="h-12 text-branco bg-preto text-xs leading-4 py-4 px-0 absolute bottom-4 w-full text-center">ESTUFAS COM PAINÉIS SOLARES AO INVÉS DE “SOMBRITE”</div>
                </div>
                <div class="mySlides hidden h-full aspect-square transition-all duration-75 rounded-lg overflow-hidden">
                    <img src="./src/assets/img/img-slide-4.png" class="w-full h-full object-cover">
                    <div class="h-12 text-branco bg-preto text-xs leading-4 py-4 px-0 absolute bottom-4 w-full text-center">FRANÇA – CONSÓRCIO ENTRE ENERGIA SOLAR FOTOVOLTAICA E UVAS</div>
                </div>
                <div class="mySlides hidden h-full aspect-square transition-all duration-75 rounded-lg overflow-hidden">
                    <img src="./src/assets/img/img-slide-5.png" class="w-full h-full object-cover">
                    <div class="h-12 text-branco bg-preto text-xs leading-4 py-4 px-0 absolute bottom-4 w-full text-center">ALEMANHA – PLANTAÇÃO DE FRUTAS CARBONO ZERO</div>
                </div>
                <div class="mySlides hidden h-full aspect-square transition-all duration-75 rounded-lg overflow-hidden">
                    <img src="./src/assets/img/img-slide-6.jpg" class="w-full h-full object-cover">
                    <div class="h-12 text-branco bg-preto text-xs leading-4 py-4 px-0 absolute bottom-4 w-full text-center">ALEMANHA – PLANTAÇÃO DE FRUTAS CARBONO ZERO</div>
                </div>
                <!-- Next and previous buttons -->
                <a class="w-auto cursor-pointer absolute top-1/2 -m-1 p-4 text-branco font-bold text-3xl duration-75 rounded-md hover:bg-[rgba(0,0,0,0.8)]" onclick="plusSlides(-1)">&#10094;</a>
                <a class="w-auto cursor-pointer absolute top-1/2 -m-1 p-4 text-branco font-bold text-3xl duration-75 rounded-md hover:bg-[rgba(0,0,0,0.8)] right-0" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <!-- The dots/circles -->
            <div class="dots w-full text-center mt-4 justify-center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
                <span class="dot" onclick="currentSlide(5)"></span>
                <span class="dot" onclick="currentSlide(6)"></span>
            </div>
        </div>
    </container>
    
    <div class="flex -bottom-1/3 left-1/3 absolute w-full aspect-square opacity-5 z-10">
        <iconify-icon icon="lucide:sun" class="text-cinza transform rotate-12" width="100%"></iconify-icon>
    </div>
</section>

<section class="sessao relative">
<container class="conteudo grid-cols-2 gap-y-8 z-20">
        <h2 class="col-span-2 flex items-center">
            <iconify-icon icon="lucide:circle-user-round" class="text-4xl mr-4"></iconify-icon>
            Equipe de Especialistas
        </h2>
        <span>
            <h3 class="flex items-center">Reynaldo Wongtschowski</h3>
            <p class="">Mais de 55 anos de vida profissional dedicada à obtençao e transformação de energia com alta eficiência. Pioneiro na cogeração de energia e vapor e na reutilização de água industrial. Dedica-se atualmente ao desenvolvimento de energias sustentáveis, tais como o biometano e  geração fotovoltáica. Elaboração do primeiro projeto nacional consorciando a produção de cana de açúcar com a energia elétrica.</p>
        </span>
        <span>
            <h3 class="flex items-center">Neuler Peçanha</h3>
            <p class="">Há mais de 30 anos especializado em análise, planejamento e execução de programas de aumento de produtividade. Destacam se trabalhos para Delco, Porto Seguro, Pfizer, SulAmérica, Castrol, Mapfre, Chevrolet, Pfizer, Monroe, Rhodia, Sanofi – Aventis, P&G, Medley, Zambom, Novartis, Syngenta e outros.</p>
        </span>
        <span>
            <h3 class="flex items-center">Claudio Bianor Sverzut</h3>
            <p class="">Tem experiência na área de Engenharia Agrícola, com ênfase em Máquinas e Equipamentos, Conservação de Solo e Água, manejo de solos agrícolas atuando principalmente nos seguintes temas: agricultura, engenharia agrícola, máquinas agrícolas, solo e plantio direto. Tem 63 publicações e 19 teses e dissertações orientadas e defendidas.</p>
        </span>
        <span>
            <h3 class="flex items-center">João Domingos Biaggi</h3>
            <p class="">Foi Professor titular da Universidade Estadual de Campinas. Tem experiência na área de Engenharia Agrícola, com ênfase em Engenharia de Processamento de Produtos Agrícolas, atuando principalmente nos seguintes temas: secagem, qualidade, alimentação animal, engenharia agrícola e gestão.</p>
        </span>
        <span>
            <h3 class="flex items-center">Ricardo Araújo Ferreira Jr</h3>
            <p class="">Doutor em Agronomia (Energia na Agricultura) na Faculdade de Ciências Agronômicas/ UNESP-Botucatu. Tem trabalhado com conjunto com o INPE na confecção do Atlas solarimétrico do Estado de Alagoas. Tem se destacado pela sua participação ativa nos estudos sobre as potencialidades agrícolas do estado, vis-a-vis a radiação solar, solos e disponibilidade de água. É o coordenador do primeiro projeto de pesquisa a nível mundial relativo ao consórcio produção de cana e de energia elétrica no mesmo espaço físico.</p>
        </span>
        <span>
            <h3 class="flex items-center">Aryoldo Machado</h3>
            <p class="">Graduado em Engenharia Mecânica na EESC-USP. Tem larga experiência em inovação tecnológica. Foi o introdutor do controle numérico de máquinas operatrizes no Brasil, tendo, inclusive, publicado o livro – COMANDO NUMÉRICO APLICADO ÀS MÁQUINAS FERRAMENTA. Trabalhou no desenvolvimento e na adaptação à realidade brasileira de máquinas operatrizes, máquinas da indústria de processamento de produtos.</p>
        </span>
    </container>
    <container class="conteudo grid-cols-3 mt-24">
        <h3 class="text-azul col-span-3 text-center mx-auto w-1/2 font-extrabold">Gerando inovação para os mercados que utilizam painéis fotovoltaicos</h3>
        <div>
            <p><strong>1.</strong> Uso compartilhado do solo para atividades agropastoris e geração de energia fotovoltaica para oferecer uma solução sustentável que maximiza o aproveitamento da terra.</p>
        </div>
        <div>
            <p><strong>2.</strong> Produção de estrutura física de produção fotovoltaíca em estufas para área agrícola com:</p>
            <ul>
                <li class="mb-2 flex items-center">
                    <iconify-icon icon="lucide:chevrons-right" class="mr-4"></iconify-icon>Adição de iluminação especial
                </li>
                <li class="mb-2 flex items-center">
                    <iconify-icon icon="lucide:chevrons-right" class="mr-4"></iconify-icon>Fertirrigação
                </li>
                <li class="mb-2 flex items-center">
                    <iconify-icon icon="lucide:chevrons-right" class="mr-4"></iconify-icon>Controles de umidade e temperatura
                </li>
                <li class="mb-2 flex items-center">
                    <iconify-icon icon="lucide:chevrons-right" class="mr-4"></iconify-icon>Captura e reuso de água de chuva
                </li>
                <li class="mb-2 flex items-center">
                    <iconify-icon icon="lucide:chevrons-right" class="mr-4"></iconify-icon>Injeção de CO2
                </li>
            </ul>
        </div>
        <div>
            <p><strong>3.</strong> Revolucionar as fazendas de produção de energia fotovoltaica com 3 grandes inovações:</p>
            <p>Trackers blindados com nova tecnologia que oferece custos reduzidos, maior vida útil e menos manutenção;</p>
            <p>Mancais em substituição aos rolamentos que oferecem menor custo, maior vida útil e manutenção zero;</p>
            <p>Novo sistema de fixação de paineis que permite acompanhar os ciclos solares e geram significativo ganho de produtividade.</p>
        </div>
    </container>
</section>

<hr>

<section class="sessao bg-cinza-claro-2">
    <container class="conteudo grid-cols-2">
        <div class=" col-span-2">
            <h2>PESQUISA EM ANDAMENTO SOBRE GERAÇÃO FOTOVOLTAICA E AUMENTO DE PRODUTIVIDADE NA CULTURA DE CANA DE AÇUCAR COM PARTICIPAÇÃO DA AGRO&SOLAR</h2>
            <p class="">Local = usina santa clotilde – rio largo – alagoas</p>
            <p class="">Primeira instalação do tipo, sobre cana de açúcar, a nível mundial</p>
            <p class="">Experimento financiado pelo governo do estado e realizado com ajuda da universidade federal de alagoas – centro de ciências agrárias.</p>
            <p class="">Experimento agronômico em execução, já gerando energia.</p>
        </div>
        <img src="./src/assets/img/plantacao-cana-alagoas-1.png" alt="" class=" shadow-2xl rounded-lg aspect-square object-cover">
        <img src="./src/assets/img/plantacao-cana-alagoas-2.png" alt="" class=" shadow-2xl rounded-lg aspect-square object-cover">
        <img src="./src/assets/img/plantacao-cana-alagoas-grafico.png" alt="" class="w-full shadow-2xl my-8 rounded-lg col-span-2">
        <table class="col-span-2 mx-0 shadow-xl" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th class="tab-celular bg-verde" colspan="6">ESTUDO DE RETORNO SOBRE ÁREA SOMBREADA POR USINA DE GERAÇÃO FOTOVOLTAICA. POR HECTARE (10.000 m²)</th>
                </tr>
                <tr>
                    <th class="tab-celular bg-verde">ÁREAS</th>
                    <th class="tab-celular bg-verde">TESTE AGRO&SOLAR</th>
                    <th class="tab-celular bg-verde">TESTEMUNHA</th>
                    <th class="tab-celular bg-verde">DIFERENÇA</th>
                    <th class="tab-celular bg-verde">COMPARATIVO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tab-celular"></td>
                    <td class="tab-celular">Área sombreada</td>
                    <td class="tab-celular">Área não sombreada</td>
                    <td class="tab-celular"></td>
                    <td class="tab-celular"></td>
                </tr>
                <tr><td class="tab-celular" colspan="5"></td></tr>
                <tr>
                    <td class="tab-celular">Produtividade</td>
                    <td class="tab-celular">84,5 Toneladas por Hectare</td>
                    <td class="tab-celular">59,1 Toneladas por Hectare</td>
                    <td class="tab-celular">Mais 25,4 Tons por hectare</td>
                    <td class="tab-celular">42,98% a mais</td>
                </tr>
                <tr><td class="tab-celular" colspan="5"></td></tr>
                <tr>
                    <td class="tab-celular">Receita Bruta por Hectare</td>
                    <td class="tab-celular">R$ 15.737,79</td>
                    <td class="tab-celular">R$ 11.007,14</td>
                    <td class="tab-celular">R$ 4.730,65</td>
                    <td class="tab-celular">42,98%</td>
                </tr>
                <tr>
                    <td class="tab-celular">Custo de Produção por Hectare</td>
                    <td class="tab-celular">R$ 11.277,99 (*)</td>
                    <td class="tab-celular">R$ 10.465,19</td>
                    <td class="tab-celular">R$ 812,80</td>
                    <td class="tab-celular">7,77%</td>
                </tr>
                <tr>
                    <td class="tab-celular">Lucro por Hectare</td>
                    <td class="tab-celular">R$ 4.459,80</td>
                    <td class="tab-celular">R$ 541,95</td>
                    <td class="tab-celular">R$ 3.917,85</td>
                    <td class="tab-celular">722,92%</td>
                </tr>
                <tr><td class="tab-celular" colspan="5"></td></tr>
                <tr>
                    <td class="tab-celular"></td>
                    <td class="tab-celular">Com mais 7% de ATR</td>
                    <td class="tab-celular"></td>
                    <td class="tab-celular"></td>
                    <td class="tab-celular"></td>
                </tr>
                <tr>
                    <td class="tab-celular">Receita Bruta por Hectare</td>
                    <td class="tab-celular">R$ 16.839,44</td>
                    <td class="tab-celular">R$ 11.007,14</td>
                    <td class="tab-celular">R$ 5.832,30</td>
                    <td class="tab-celular">52,99%</td>
                </tr>
                <tr>
                    <td class="tab-celular">Custo de Produção por Hectare</td>
                    <td class="tab-celular">R$ 11.277,99 (*)</td>
                    <td class="tab-celular">R$ 10.465,19</td>
                    <td class="tab-celular">R$ 812,80</td>
                    <td class="tab-celular">7,77%</td>
                </tr>
                <tr>
                    <td class="tab-celular">Lucro por Hectare</td>
                    <td class="tab-celular">R$ 5.561,45</td>
                    <td class="tab-celular">R$ 541,95</td>
                    <td class="tab-celular">R$ 5.019,50</td>
                    <td class="tab-celular">926,19%</td>
                </tr>
                <tr><td class="tab-celular" colspan="5"></td></tr>
            </tbody>
            <tfoot>
                <tr>
                    <td class="tab-celular bg-[#990000] text-branco font-extrabold" colspan="6">RESULTADO LEVA A CONCLUSÃO QUE A LUCRATIVIDADE POR HECTARE SOMBREADO PASSA DE 10 VEZES A DE ÁREA NÃO SOMBREADA</td>
                </tr>
                <tr>
                    <td class="tab-celular" colspan="6">(*) Custo maior com a colheita devido ao aumento de produtividade</td>
                </tr>
            </tfoot>
        </table>
    </container>
</section>

<hr>

<section class="sessao">
    <container class="conteudo grid-cols-2">
        <div>
            <img src="./src/assets/img/img-slide-5.jpg" alt="" class="aspect-square rounded-lg object-cover" style="box-shadow:-20px 20px 0 #B3DE00;">
        </div>
        <div class="coluna justify-center">
            <h2 class="flex items-center"><iconify-icon icon="lucide:grid-3x3" class="mr-4"></iconify-icon>Locação de Sistemas</h2>
            <p class="mb-16">A Agro&Solar apresenta uma solução inovadora que combina economia e sustentabilidade: a locação de placas solares. Neste modelo, o cliente adquire as placas solares e paga um aluguel acessível para instalação e manutenção. Em troca, obtém significativa redução na conta de energia elétrica. Além disso, a energia gerada proporciona ganhos financeiros a longo prazo, tornando o investimento uma fonte de retorno constante.</p>
            <strong>
                <ul class="grid gap-4">
                    <li>Redução Imediata na Conta de Luz</li>
                    <li>Economia a Longo Prazo</li>
                    <li>Flexibilidade e Acessibilidade</li>
                    <li>Energia Limpa e Estável</li>
                </ul>
            </strong>
        </div>
        <div id="tabela-investmento" class="col-span-2 mt-16">
            <h3 class="mx-auto w-full text-center mt-16">ECONOMIA NAS CONTAS DE ELETRICIDADE 1Kw = R$ 1,00 (em R$)</h3>
            <div class="w-full flex overflow-hidden">
                <div class="w-3/6">
                    <table class="w-full" cellspacing="0" cellpadding="5">
                        <thead>
                            <tr>
                                <th class="tab-celular h-8 w-1/4 bg-verde font-black py-2">CONTA</th>
                                <th class="tab-celular h-8 w-1/4 bg-verde font-black py-2">CONTA</th>
                                <th class="tab-celular h-8 w-1/4 bg-verde font-black py-2">CONSUMO</th>
                                <th class="tab-celular h-8 w-1/4 bg-verde font-black py-2">COMPRA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0] font-black py-2">Mensal R$</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2] font-black py-2">Anual R$</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5] font-black py-2">KWh/mês</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8] font-black py-2">Invest. R$</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest text-[#fff]" colspan="4">50%</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">1.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">12.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">1.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">25.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">1.500</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">18.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">1.500</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">35.000</td>
                            </tr>                            
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">2.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">24.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">2.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">45.000</td>
                            </tr>                            
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">3.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">36.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">2.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">65.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">4.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">48.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">4.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">85.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">5.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">60.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">5.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">105.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">6.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">72.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">6.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">125.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">7.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">84.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">7.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">145.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">8.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">96.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">8.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">165.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">9.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">108.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">9.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">185.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">10.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">120.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">10.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">205.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">11.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">132.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">11.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">225.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">12.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">144.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">12.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">245.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">13.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">156.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">13.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">265.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">14.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">168.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">14.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">285.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">15.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">180.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">15.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">305.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">16.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">192.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">16.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">325.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">17.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">204.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">17.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">345.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">18.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">216.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">18.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">365.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">19.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">228.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">19.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">385.000</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest bg-[#DAF2D0]">20.000</td>
                                <td class="tab-celular tab-invest bg-[#B5E6A2]">240.000</td>
                                <td class="tab-celular tab-invest bg-[#FBE2D5]">20.000</td>
                                <td class="tab-celular tab-invest bg-[#DAE9F8]">405.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-3/6 overflow-x-scroll">
                    <table class="" cellspacing="0" cellpadding="5">
                        <thead>
                            <tr>
                                <th class="tab-celular h-8 bg-verde font-black" colspan="7">ECONOMIA POR ANO</th>
                                <th class="tab-celular h-8 min-w-44 bg-verde font-black" colspan="2">ECONOMIA TOTAL R$</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="tab-celular tab-invest bg-verde font-black py-2">Ano 01</td>
                                <td class="tab-celular tab-invest bg-verde font-black py-2">Ano 02</td>
                                <td class="tab-celular tab-invest bg-verde font-black py-2">Ano 03</td>
                                <td class="tab-celular tab-invest bg-verde font-black py-2">Ano 04</td>
                                <td class="tab-celular tab-invest bg-verde font-black py-2">Ano 05</td>
                                <td class="tab-celular tab-invest bg-verde font-black py-2">Ano 06</td>
                                <td class="tab-celular tab-invest bg-verde font-black py-2">Ano 07 até 20</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6] font-black py-2">TOTAL</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6] font-black py-2">TOTAL C/ LUCRO</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">20%</td>
                                <td class="tab-celular tab-invest">20%</td>
                                <td class="tab-celular tab-invest">30%</td>
                                <td class="tab-celular tab-invest">30%</td>
                                <td class="tab-celular tab-invest">40%</td>
                                <td class="tab-celular tab-invest">40%</td>
                                <td class="tab-celular tab-invest">50%</td>
                                <td class="tab-celular tab-invest"></td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">2.400</td>
                                <td class="tab-celular tab-invest">2.400</td>
                                <td class="tab-celular tab-invest">3.600</td>
                                <td class="tab-celular tab-invest">3.600</td>
                                <td class="tab-celular tab-invest">4.800</td>
                                <td class="tab-celular tab-invest">4.800</td>
                                <td class="tab-celular tab-invest">6.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">105.600</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">356.358</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">3.600</td>
                                <td class="tab-celular tab-invest">3.600</td>
                                <td class="tab-celular tab-invest">5.400</td>
                                <td class="tab-celular tab-invest">5.400</td>
                                <td class="tab-celular tab-invest">7.200</td>
                                <td class="tab-celular tab-invest">7.200</td>
                                <td class="tab-celular tab-invest">9.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">158.400</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">407.399</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">4.800</td>
                                <td class="tab-celular tab-invest">4.800</td>
                                <td class="tab-celular tab-invest">7.200</td>
                                <td class="tab-celular tab-invest">7.200</td>
                                <td class="tab-celular tab-invest">9.600</td>
                                <td class="tab-celular tab-invest">9.600</td>
                                <td class="tab-celular tab-invest">12.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">211.200</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">466.238</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">7.200</td>
                                <td class="tab-celular tab-invest">7.200</td>
                                <td class="tab-celular tab-invest">10.800</td>
                                <td class="tab-celular tab-invest">10.800</td>
                                <td class="tab-celular tab-invest">14.400</td>
                                <td class="tab-celular tab-invest">14.400</td>
                                <td class="tab-celular tab-invest">18.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">316.800</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">583.916</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">9.600</td>
                                <td class="tab-celular tab-invest">9.600</td>
                                <td class="tab-celular tab-invest">14.400</td>
                                <td class="tab-celular tab-invest">14.400</td>
                                <td class="tab-celular tab-invest">19.200</td>
                                <td class="tab-celular tab-invest">19.200</td>
                                <td class="tab-celular tab-invest">24.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">422.400</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">701.594</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">12.000</td>
                                <td class="tab-celular tab-invest">12.000</td>
                                <td class="tab-celular tab-invest">18.000</td>
                                <td class="tab-celular tab-invest">18.000</td>
                                <td class="tab-celular tab-invest">24.000</td>
                                <td class="tab-celular tab-invest">24.000</td>
                                <td class="tab-celular tab-invest">30.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">528.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">819.272</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">14.400</td>
                                <td class="tab-celular tab-invest">14.400</td>
                                <td class="tab-celular tab-invest">21.600</td>
                                <td class="tab-celular tab-invest">21.600</td>
                                <td class="tab-celular tab-invest">28.800</td>
                                <td class="tab-celular tab-invest">28.800</td>
                                <td class="tab-celular tab-invest">36.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">633.600</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">936.949</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">16.800</td>
                                <td class="tab-celular tab-invest">16.800</td>
                                <td class="tab-celular tab-invest">25.200</td>
                                <td class="tab-celular tab-invest">25.200</td>
                                <td class="tab-celular tab-invest">33.600</td>
                                <td class="tab-celular tab-invest">33.600</td>
                                <td class="tab-celular tab-invest">42.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">739.200</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.054.627</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">19.200</td>
                                <td class="tab-celular tab-invest">19.200</td>
                                <td class="tab-celular tab-invest">28.800</td>
                                <td class="tab-celular tab-invest">28.800</td>
                                <td class="tab-celular tab-invest">38.400</td>
                                <td class="tab-celular tab-invest">38.400</td>
                                <td class="tab-celular tab-invest">48.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">844.800</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.172.305</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">21.600</td>
                                <td class="tab-celular tab-invest">21.600</td>
                                <td class="tab-celular tab-invest">32.400</td>
                                <td class="tab-celular tab-invest">32.400</td>
                                <td class="tab-celular tab-invest">43.200</td>
                                <td class="tab-celular tab-invest">43.200</td>
                                <td class="tab-celular tab-invest">54.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">950.400</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.289.983</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">24.000</td>
                                <td class="tab-celular tab-invest">24.000</td>
                                <td class="tab-celular tab-invest">36.000</td>
                                <td class="tab-celular tab-invest">36.000</td>
                                <td class="tab-celular tab-invest">48.000</td>
                                <td class="tab-celular tab-invest">48.000</td>
                                <td class="tab-celular tab-invest">60.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.056.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.407.661</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">26.400</td>
                                <td class="tab-celular tab-invest">26.400</td>
                                <td class="tab-celular tab-invest">39.600</td>
                                <td class="tab-celular tab-invest">39.600</td>
                                <td class="tab-celular tab-invest">52.800</td>
                                <td class="tab-celular tab-invest">52.800</td>
                                <td class="tab-celular tab-invest">66.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.161.600</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.525.338</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">28.800</td>
                                <td class="tab-celular tab-invest">28.800</td>
                                <td class="tab-celular tab-invest">43.200</td>
                                <td class="tab-celular tab-invest">43.200</td>
                                <td class="tab-celular tab-invest">57.600</td>
                                <td class="tab-celular tab-invest">57.600</td>
                                <td class="tab-celular tab-invest">72.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.267.200</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.643.016</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">31.200</td>
                                <td class="tab-celular tab-invest">31.200</td>
                                <td class="tab-celular tab-invest">46.800</td>
                                <td class="tab-celular tab-invest">46.800</td>
                                <td class="tab-celular tab-invest">62.400</td>
                                <td class="tab-celular tab-invest">62.400</td>
                                <td class="tab-celular tab-invest">78.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.372.800</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.760.694</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">33.600</td>
                                <td class="tab-celular tab-invest">33.600</td>
                                <td class="tab-celular tab-invest">50.400</td>
                                <td class="tab-celular tab-invest">50.400</td>
                                <td class="tab-celular tab-invest">67.200</td>
                                <td class="tab-celular tab-invest">67.200</td>
                                <td class="tab-celular tab-invest">84.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.478.400</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.878.372</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">36.000</td>
                                <td class="tab-celular tab-invest">36.000</td>
                                <td class="tab-celular tab-invest">54.000</td>
                                <td class="tab-celular tab-invest">54.000</td>
                                <td class="tab-celular tab-invest">72.000</td>
                                <td class="tab-celular tab-invest">72.000</td>
                                <td class="tab-celular tab-invest">90.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.584.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.996.050</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">38.400</td>
                                <td class="tab-celular tab-invest">38.400</td>
                                <td class="tab-celular tab-invest">57.600</td>
                                <td class="tab-celular tab-invest">57.600</td>
                                <td class="tab-celular tab-invest">76.800</td>
                                <td class="tab-celular tab-invest">76.800</td>
                                <td class="tab-celular tab-invest">96.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.689.600</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">2.113.727</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">40.800</td>
                                <td class="tab-celular tab-invest">40.800</td>
                                <td class="tab-celular tab-invest">61.200</td>
                                <td class="tab-celular tab-invest">61.200</td>
                                <td class="tab-celular tab-invest">81.600</td>
                                <td class="tab-celular tab-invest">81.600</td>
                                <td class="tab-celular tab-invest">102.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.795.200</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">2.231.405</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">43.200</td>
                                <td class="tab-celular tab-invest">43.200</td>
                                <td class="tab-celular tab-invest">64.800</td>
                                <td class="tab-celular tab-invest">64.800</td>
                                <td class="tab-celular tab-invest">86.400</td>
                                <td class="tab-celular tab-invest">86.400</td>
                                <td class="tab-celular tab-invest">108.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">1.900.800</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">2.349.083</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">45.600</td>
                                <td class="tab-celular tab-invest">45.600</td>
                                <td class="tab-celular tab-invest">68.400</td>
                                <td class="tab-celular tab-invest">68.400</td>
                                <td class="tab-celular tab-invest">91.200</td>
                                <td class="tab-celular tab-invest">91.200</td>
                                <td class="tab-celular tab-invest">114.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">2.006.400</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">2.466.761</td>
                            </tr>
                            <tr>
                                <td class="tab-celular tab-invest">48.000</td>
                                <td class="tab-celular tab-invest">48.000</td>
                                <td class="tab-celular tab-invest">72.000</td>
                                <td class="tab-celular tab-invest">72.000</td>
                                <td class="tab-celular tab-invest">96.000</td>
                                <td class="tab-celular tab-invest">96.000</td>
                                <td class="tab-celular tab-invest">120.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">2.112.000</td>
                                <td class="tab-celular tab-invest bg-[#ADD8E6]">2.584.439</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </container>
</section>

<hr>

<section class="sessao">
    <container class="conteudo grid-cols-2"> 
        <div class="coluna justify-center">
            <h2 class="flex items-center"><iconify-icon icon="lucide:building-2" class="mr-4"></iconify-icon>Grandes Projetos</h2>
            <p>Oferecemos projetos completos que incluem estudos topográficos, parecer de acesso, opções de investimento e autenticação com órgãos regionais. Trabalhamos com a abordagem 'turnkey', onde cuidamos de todas as etapas do projeto, desde a concepção até a execução, garantindo que você tenha uma solução pronta para uso. Além disso, analisamos investimentos e retornos para garantir a melhor solução para você.</p>
            <!--<p>A Lupo é uma renomada fábrica brasileira especializada em meias, cuecas e roupas íntimas, reconhecida pela qualidade e inovação em seus produtos. Com sede no interior de São Paulo, a empresa tem se destacado no mercado nacional e internacional, priorizando sustentabilidade e eficiência em suas operações. Ao adotar soluções como sistemas agrifotovoltaicos, empresas como a Lupo podem reduzir custos com energia e reforçar seu compromisso com práticas ambientais responsáveis.</p>-->
        </div>
        <div>
            <img src="./src/assets/img/fabrica.jpg" alt="" class="aspect-square rounded-lg object-cover" style="box-shadow:20px 20px 0 #B3DE00;">
        </div>
    </container>
</section>

<hr>

<section class="sessao">
    <container class="conteudo grid-cols-2">
        <div>
            <img src="./src/assets/img/residencial.jpg" alt="" class="aspect-square rounded-lg object-cover" style="box-shadow:-20px 20px 0 #B3DE00;">
        </div>
        <div class="coluna justify-center">
            <h2 class="flex items-top"><iconify-icon icon="lucide:house" class="mr-4"></iconify-icon>Pequenos Projetos</h2>
            <p>Na Agro&Solar, entendemos que pequenos negócios e residências buscam soluções acessíveis e sustentáveis. Nossos sistemas de energia solar são projetados para reduzir significativamente suas contas de luz, permitindo que você economize e invista em outras áreas. E o melhor: toda análise é gratuita! Você pode gerar sua própria energia sem altos investimentos iniciais, promovendo um ambiente mais sustentável. Junte-se a nós e transforme seu espaço em um exemplo de eficiência e responsabilidade ambiental.</p>
        </div>
    </container>
</section>

<section class="sessao bg-preto mt-24">
    <container class="conteudo grid-cols-2">
        <div>
            <h2 class="text-verde">Fale Conosco</h2>
            <ul class="grid gap-y-4">
                <li class="flex items-center text-cinza-claro">
                    <div class="w-5 mr-4">
                        <iconify-icon icon="lucide:mail" width="100%"></iconify-icon>
                    </div>
                    <p class="m-0">neuler.pecanha@agroesolar.com.br</p>
                </li>
                <li class="flex items-center text-cinza-claro">
                    <div class="w-5 mr-4">
                        <iconify-icon icon="lucide:phone" width="100%"></iconify-icon>
                    </div>
                    <p class="m-0">+55 11 99999-9999</p>
                </li>
            </ul>
            <br><br>
            <ul class="grid gap-y-4">
                <li class="flex items-center text-cinza-claro">
                    <div class="w-5 mr-4">
                        <iconify-icon icon="lucide:mail" width="100%"></iconify-icon>
                    </div>
                    <p class="m-0">reynaldo.wongtschowski@agroesolar.com.br</p>
                </li>
                <li class="flex items-center text-cinza-claro">
                    <div class="w-5 mr-4">
                        <iconify-icon icon="lucide:phone" width="100%"></iconify-icon>
                    </div>
                    <p class="m-0">+55 11 99999-9999</p>
                </li>
            </ul>
        </div>
    </container>
</section>

<!--
<section id="sctn-fot" class="bg-preto">
    <h2>Fotossíntese</h2>
    <div>
        <div class="col-50">
            <p>O processo de fotossíntese é a transformação de dióxido de carbono em açúcares induzida por radiação eletromagnética. Sem pretender entrar em detalhes técnicos, a fotossíntese representa a absorção de dióxido de carbono pelas plantas, fechando o ciclo do oxigênio na face da terra. As plantas terrestres e algas realizam a fotossíntese em função da energia fornecida pelo sol.</p>
            <br>
            <p>As plantas, de maneira geral, reagem de forma diferente à luz solar. Algumas tem grande potencial de aproveitamento da energia eletromagnética do sol, a exemplo das gramíneas (cana de açúcar, por exemplo). Outras plantas tem menor capacidade de absorção. Neste caso, a exposição excessiva à luz solar acaba redundando em evapotranspiração aumentando o consumo de água.</p>
        </div>
        <div class="col-50">
            <table>
                <thead>
                    <tr>
                        <td colspan="4" class="titulo">
                            <strong>
                                Pontos de Saturação Luminosa de Culturas (%)
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <th>Cultura</th>
                        <th>PSL</th>
                        <th>Cultura</th>
                        <th>PSL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Milho</strong></td>
                        <td>80-90</td>
                        <td><strong>Arroz</strong></td>
                        <td>40-45</td>
                    </tr>
                    <tr>
                        <td><strong>Melancia</strong></td>
                        <td>80-90</td>
                        <td><strong>Cenoura</strong></td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td><strong>Tomate</strong></td>
                        <td>80</td>
                        <td><strong>Nabo</strong></td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td><strong>Inhame</strong></td>
                        <td>80</td>
                        <td><strong>Batata Doce</strong></td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td><strong>Pepino</strong></td>
                        <td>55</td>
                        <td><strong>Alface</strong></td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><strong>Abóbora</strong></td>
                        <td>45</td>
                        <td><strong>Pimenta Verde</strong></td>
                        <td>20-30</td>
                    </tr>
                    <tr>
                        <td><strong>Mirtilo</strong></td>
                        <td>45</td>
                        <td><strong>Cebola</strong></td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td><strong>Repolho</strong></td>
                        <td>45</td>
                        <td><strong>Cogumelo</strong></td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p>* <strong>PSL:</strong> Ponto de Saturação Luminosa</p>
        </div>
    </div>
</section>
-->