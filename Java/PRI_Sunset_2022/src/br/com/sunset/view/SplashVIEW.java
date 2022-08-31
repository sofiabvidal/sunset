package br.com.sunset.view;

import java.awt.Color;
import java.awt.Point;
import javax.swing.ImageIcon;
import javax.swing.JLabel;
import javax.swing.JProgressBar;
import javax.swing.JWindow;
import javax.swing.UIManager;
import javax.swing.UIManager.LookAndFeelInfo;


/**
 * Essa classe contém os métodos para mostrar a tela de splash iniciando 
 * o sistema.
 * Disciplina de LPA - Integrado IFSP
 *
 * @author Andre Luis Gobbi Primo/Marcelo Luis Murari
 * @version 2.0
 */
public class SplashVIEW extends JWindow{

    
    /**
     * Método construtor da Classe
     */
    public SplashVIEW() throws InterruptedException{
        //Pega a largura da tela do computador
        int w = this.getToolkit().getDefaultToolkit().getScreenSize().width;
        
        //Pega a altura da tela do computador
        int h = this.getToolkit().getDefaultToolkit().getScreenSize().height;
        
        //Claculando o ponto de início da tela
        int x = (w-500) / 2;
        int y = (h-350) / 2;
        
        //Cria um Jlabel onde a imagem via ser carregada
        JLabel labelimg = new JLabel(new ImageIcon(getClass().getResource("imagens/sunset.png")));
        
        //Localização da imagem dentro da janela
        labelimg.setLocation(new Point(0,0));
        
        //Tamanho da imagem
        labelimg.setSize(500, 350);
        
        //Set o Layout para null deixando de livre formato
        this.setLayout(null);
        
        //Adicona o obejto label na janela
        this.add(labelimg);
        
        //Fala onde a janela vai começar a ser contruida na tela
        this.setLocation(new Point(x,y));
        
        //O tamanho da janela que deve ser um pouco maio que a imagem na altura para caber a barra de progresso.
        this.setSize(500,350);
        
        //Torna a janela visivel
        this.setVisible(true);
        
        //Cria a barra de progresso
        JProgressBar barraDeProgresso = new JProgressBar();
        
        //Coloca cor na barra de progresso
        //barraDeProgresso.setBackground(new Color(200,200,200));
        barraDeProgresso.setForeground(new Color(0,0,0));
        
        //Fala onde vai fica na janela(0,335) largunra e altura (521,20)
        barraDeProgresso.setBounds(0,350,500,20);
        
        //Mostra os % ao carregar a barra
        barraDeProgresso.setStringPainted(true);
        
        //Adicona a barra na janela
        this.add(barraDeProgresso);
        
        //Cria uma Thread para a barra pode carregar
        new Thread(){
            
            //Inicializa a Thread
            public void run(){
                
                //Coloca-se um for para a barra ir preenchendo
                for(int progresso = 0; progresso<101; progresso++){
                    //Preenche a barra com o valor da varável progresso
                    barraDeProgresso.setValue(progresso);
                    
                    try {
                        //Para um tempo para a barrar preencher lentamente
                        sleep(80); //colocar 80
                    } 
                    catch (InterruptedException ex) {
                        ex.printStackTrace();
                    }
                }
            }
        }.start();
        
        //Este tmepo é assim que Thread termina ele ainda espera um tempo para fechar a janela
        Thread.sleep(9500);
        
        //Fecha a janela de Splash
        this.dispose();
    }//Fecha o método construtor da janela de Splash
    
    
    /**
     * Método main que coloca o sistema em execução
     */
    public static void main(String[] args) throws InterruptedException{
        try{
            /* Lista de L&F padrão
                Metal
                Nimbus
                CDE/Motif
                Windows
                Windows Classic
             */
            for (LookAndFeelInfo info : UIManager.getInstalledLookAndFeels()) {
                    if ("Windows".equals(info.getName())) {
                        UIManager.setLookAndFeel(info.getClassName());
                        break;
                    }
            }
            
            new SplashVIEW();
            //new TelaInicialVIEW("sem usuário").setVisible(true);
            new TelaPrincipal().setVisible(true);
        
        }
        catch(Exception e){
            System.out.println("Erro ao iniciar o sistema");
        }
        
    }//Fecha método main
    
}//Fecha classe SplashVIEW
