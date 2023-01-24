#Cenário de teste 1
#Será criado um acesso novo e realizado login no mesmo


#(1)importação do driver a partir da bibliotea selenium
from selenium import webdriver


#(2)atualização do driver do navegador
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.chrome.service import Service
servico = Service(ChromeDriverManager().install())


#(3)abrir navegador
navegador = webdriver.Chrome(service=servico)


#(4)direcionar o navegador p/ URL
navegador.get("https://projeto1fahleiro.000webhostapp.com/")


#(5)clicar para ir até CADASTRO
navegador.find_element('xpath','/html/body/div[1]/section/div/form/a').click()


#(6)preencher campos obrigatórios, nome
navegador.find_element('xpath','/html/body/div[1]/section/div/form/div[1]/div/input').send_keys("N12")

#(6.1)preencher campos obrigatórios, usuário
navegador.find_element('xpath','/html/body/div[1]/section/div/form/div[2]/div/input').send_keys("U12")

#(6.2)preencher campos obrigatórios, senha
navegador.find_element('xpath','/html/body/div[1]/section/div/form/div[3]/div/input').send_keys("S12")


#(7)clicar para realizar CADASTRO
navegador.find_element('xpath','/html/body/div[1]/section/div/form/button').click()

#definição de um curto tempo de espera, aguardando carregar a mensagem de cadastro bem sucedido
time.sleep(1)


#(8)clicar para direcionar p/ LOGIN, LINK CADASTRO COM SUCESSO
navegador.find_element('xpath','/html/body/div[1]/section/div[1]/p[2]/a').click()


#(9)preencher campos obrigatórios, usuário
navegador.find_element('xpath','/html/body/div[1]/section/div/form/div[1]/div/input').send_keys("U12")

#(9.1)preencher campos obrigatórios, senha
navegador.find_element('xpath','/html/body/div[1]/section/div/form/div[2]/div/input').send_keys("S12")

#(9.2)clicar para realizar LOGIN
navegador.find_element('xpath','/html/body/div[1]/section/div/form/button').click()


#(10)no último passo do processo iremos realizar logout da aplicação**
navegador.find_element('xpath','/html/body/div[1]/h2[2]/a').click()

