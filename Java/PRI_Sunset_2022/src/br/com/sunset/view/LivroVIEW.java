package br.com.sunset.view;

import java.awt.Dimension;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;
import java.sql.ResultSet;
import javax.swing.JTextArea;
import javax.swing.JTextField;
import br.com.sunset.dto.LivroDTO;
import br.com.sunset.ctr.LivroCTR;

public class LivroVIEW extends javax.swing.JInternalFrame {
    LivroDTO livroDTO = new LivroDTO();
    LivroCTR livroCTR = new LivroCTR();
    ResultSet rs; 
    int gravar_alterar; 
    DefaultTableModel modelo_jtlConsultarAutor;
    DefaultTableModel modelo_jtl_ConsultarAutorSelecionado;
 
    public LivroVIEW() {
        initComponents();
        this.setSize(768, 465);
        liberaCampos(false);
        liberaBotoes(true, false, false, false, true);
        modelo_jtlConsultarAutor = (DefaultTableModel) jtlConsultarAutor.getModel();
        modelo_jtl_ConsultarAutorSelecionado = (DefaultTableModel) jtl_ConsultarAutorSelecionado.getModel();
    }
    
    public void setPosicao() {
        Dimension d = this.getDesktopPane().getSize();
        this.setLocation((d.width - this.getSize().width) / 2, (d.height - this.getSize().height) / 2); 
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        iLabel1 = new javax.swing.JLabel();
        titulo = new javax.swing.JTextField();
        iLabel2 = new javax.swing.JLabel();
        isbn = new javax.swing.JTextField();
        jLabel4 = new javax.swing.JLabel();
        dtaPublicacao = new javax.swing.JTextField();
        jLabel5 = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        jLabel7 = new javax.swing.JLabel();
        idioma = new javax.swing.JComboBox<>();
        temaLivro = new javax.swing.JPanel();
        romance = new javax.swing.JCheckBox();
        comedia = new javax.swing.JCheckBox();
        drama = new javax.swing.JCheckBox();
        terror = new javax.swing.JCheckBox();
        suspense = new javax.swing.JCheckBox();
        aventura = new javax.swing.JCheckBox();
        jScrollPane2 = new javax.swing.JScrollPane();
        sinopse = new javax.swing.JTextArea();
        jPanel4 = new javax.swing.JPanel();
        btnNovo = new javax.swing.JButton();
        btnSalvar = new javax.swing.JButton();
        btnCancelar1 = new javax.swing.JButton();
        btnExcluir = new javax.swing.JButton();
        btnSair = new javax.swing.JButton();
        jLabel1 = new javax.swing.JLabel();
        jPanel2 = new javax.swing.JPanel();
        jLabel8 = new javax.swing.JLabel();
        pesquisaAutor = new javax.swing.JTextField();
        btnPesquisarPro = new javax.swing.JButton();
        jScrollPane3 = new javax.swing.JScrollPane();
        jtlConsultarAutor = new javax.swing.JTable();
        jScrollPane4 = new javax.swing.JScrollPane();
        jtl_ConsultarAutorSelecionado = new javax.swing.JTable();
        btnAutorRem = new javax.swing.JButton();
        btnAutorAdd = new javax.swing.JButton();

        setTitle("Cadastro de Livros");
        setToolTipText("");

        jPanel1.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Dados", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Segoe UI", 1, 12))); // NOI18N

        iLabel1.setText("Título:");

        iLabel2.setText("ISBN:");

        isbn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                isbnActionPerformed(evt);
            }
        });

        jLabel4.setText("Data de Publicação:");

        dtaPublicacao.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                dtaPublicacaoActionPerformed(evt);
            }
        });

        jLabel5.setText("Idioma:");

        jLabel6.setText("Gênero:");

        jLabel7.setText("Sinopse:");

        idioma.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Selecione um idioma", "Português - BR", "Inglês", "Espanhol", "Francês", "Alemão", "Russo" }));

        temaLivro.setBorder(javax.swing.BorderFactory.createTitledBorder(""));

        romance.setFont(new java.awt.Font("Segoe UI", 0, 11)); // NOI18N
        romance.setText("Romance");

        comedia.setFont(new java.awt.Font("Segoe UI", 0, 11)); // NOI18N
        comedia.setText("Comédia");

        drama.setFont(new java.awt.Font("Segoe UI", 0, 11)); // NOI18N
        drama.setText("Drama");

        terror.setFont(new java.awt.Font("Segoe UI", 0, 11)); // NOI18N
        terror.setText("Terror");

        suspense.setFont(new java.awt.Font("Segoe UI", 0, 11)); // NOI18N
        suspense.setText("Suspense");

        aventura.setFont(new java.awt.Font("Segoe UI", 0, 11)); // NOI18N
        aventura.setText("Aventura");

        javax.swing.GroupLayout temaLivroLayout = new javax.swing.GroupLayout(temaLivro);
        temaLivro.setLayout(temaLivroLayout);
        temaLivroLayout.setHorizontalGroup(
            temaLivroLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(temaLivroLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(temaLivroLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(romance)
                    .addComponent(terror))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(temaLivroLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(suspense)
                    .addComponent(drama))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(temaLivroLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(comedia)
                    .addComponent(aventura))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        temaLivroLayout.setVerticalGroup(
            temaLivroLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(temaLivroLayout.createSequentialGroup()
                .addGroup(temaLivroLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(romance)
                    .addComponent(drama)
                    .addComponent(comedia))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(temaLivroLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(terror)
                    .addComponent(suspense)
                    .addComponent(aventura)))
        );

        sinopse.setColumns(20);
        sinopse.setRows(5);
        jScrollPane2.setViewportView(sinopse);

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(iLabel1)
                    .addComponent(jLabel5)
                    .addComponent(jLabel6)
                    .addComponent(jLabel7)
                    .addComponent(titulo)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(iLabel2)
                            .addComponent(isbn, javax.swing.GroupLayout.PREFERRED_SIZE, 120, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(dtaPublicacao, javax.swing.GroupLayout.PREFERRED_SIZE, 134, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jLabel4)))
                    .addComponent(idioma, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(temaLivro, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jScrollPane2))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(iLabel1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(titulo, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(iLabel2)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(isbn, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(jLabel4)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(dtaPublicacao, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabel5)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(idioma, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabel6)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(temaLivro, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jLabel7)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap())
        );

        jPanel4.setBorder(javax.swing.BorderFactory.createTitledBorder(""));

        btnNovo.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/novo.png"))); // NOI18N
        btnNovo.setText("Novo");
        btnNovo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnNovoActionPerformed(evt);
            }
        });

        btnSalvar.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/salvar.png"))); // NOI18N
        btnSalvar.setText("Salvar");
        btnSalvar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnSalvarActionPerformed(evt);
            }
        });

        btnCancelar1.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/cancelar.png"))); // NOI18N
        btnCancelar1.setText("Cancelar");
        btnCancelar1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnCancelar1ActionPerformed(evt);
            }
        });

        btnExcluir.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/excluir.png"))); // NOI18N
        btnExcluir.setText("Excluir");
        btnExcluir.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnExcluirActionPerformed(evt);
            }
        });

        btnSair.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/sair.png"))); // NOI18N
        btnSair.setText("Sair");
        btnSair.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnSairActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel4Layout = new javax.swing.GroupLayout(jPanel4);
        jPanel4.setLayout(jPanel4Layout);
        jPanel4Layout.setHorizontalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel4Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(btnNovo)
                .addGap(84, 84, 84)
                .addComponent(btnSalvar)
                .addGap(53, 53, 53)
                .addComponent(btnCancelar1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnExcluir)
                .addGap(79, 79, 79)
                .addComponent(btnSair)
                .addContainerGap())
        );
        jPanel4Layout.setVerticalGroup(
            jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                .addComponent(btnSalvar, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnNovo)
                .addComponent(btnCancelar1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnExcluir, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(btnSair, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jLabel1.setFont(new java.awt.Font("Arial Rounded MT Bold", 1, 18)); // NOI18N
        jLabel1.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        jLabel1.setText("Livro");

        jPanel2.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Consulta", javax.swing.border.TitledBorder.DEFAULT_JUSTIFICATION, javax.swing.border.TitledBorder.DEFAULT_POSITION, new java.awt.Font("Arial", 1, 12))); // NOI18N

        jLabel8.setHorizontalAlignment(javax.swing.SwingConstants.RIGHT);
        jLabel8.setText("Descrição:");
        jLabel8.setMaximumSize(new java.awt.Dimension(49, 14));

        btnPesquisarPro.setFont(new java.awt.Font("Arial", 1, 12)); // NOI18N
        btnPesquisarPro.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/pesquisar.png"))); // NOI18N
        btnPesquisarPro.setAlignmentY(0.0F);
        btnPesquisarPro.setBorder(null);
        btnPesquisarPro.setCursor(new java.awt.Cursor(java.awt.Cursor.DEFAULT_CURSOR));
        btnPesquisarPro.setDebugGraphicsOptions(javax.swing.DebugGraphics.LOG_OPTION);
        btnPesquisarPro.setMaximumSize(new java.awt.Dimension(113, 35));
        btnPesquisarPro.setMinimumSize(new java.awt.Dimension(113, 35));
        btnPesquisarPro.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnPesquisarProActionPerformed(evt);
            }
        });

        jtlConsultarAutor.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "ID", "Descrição", "Valor"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jtlConsultarAutor.getTableHeader().setReorderingAllowed(false);
        jScrollPane3.setViewportView(jtlConsultarAutor);

        jtl_ConsultarAutorSelecionado.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "ID", "Descrição", "Valor", "QTD"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false, true
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jtl_ConsultarAutorSelecionado.getTableHeader().setReorderingAllowed(false);
        jScrollPane4.setViewportView(jtl_ConsultarAutorSelecionado);

        btnAutorRem.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/autorRem.png"))); // NOI18N
        btnAutorRem.setToolTipText("Remover Produto da Lista");
        btnAutorRem.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnAutorRemActionPerformed(evt);
            }
        });

        btnAutorAdd.setIcon(new javax.swing.ImageIcon(getClass().getResource("/br/com/sunset/view/imagens/autorAdd.png"))); // NOI18N
        btnAutorAdd.setToolTipText("Adicionar Produto na Lista");
        btnAutorAdd.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnAutorAddActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addComponent(jLabel8, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(pesquisaAutor, javax.swing.GroupLayout.PREFERRED_SIZE, 264, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(10, 10, 10)
                .addComponent(btnPesquisarPro, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE))
            .addComponent(jScrollPane3, javax.swing.GroupLayout.PREFERRED_SIZE, 476, javax.swing.GroupLayout.PREFERRED_SIZE)
            .addComponent(jScrollPane4, javax.swing.GroupLayout.PREFERRED_SIZE, 476, javax.swing.GroupLayout.PREFERRED_SIZE)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGap(187, 187, 187)
                .addComponent(btnAutorAdd, javax.swing.GroupLayout.PREFERRED_SIZE, 39, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(btnAutorRem, javax.swing.GroupLayout.PREFERRED_SIZE, 39, javax.swing.GroupLayout.PREFERRED_SIZE))
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel2Layout.createSequentialGroup()
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                        .addComponent(jLabel8, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(pesquisaAutor, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                    .addComponent(btnPesquisarPro, javax.swing.GroupLayout.Alignment.TRAILING, javax.swing.GroupLayout.PREFERRED_SIZE, 35, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jScrollPane3, javax.swing.GroupLayout.PREFERRED_SIZE, 92, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(39, 39, 39)
                .addGroup(jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(btnAutorRem, javax.swing.GroupLayout.PREFERRED_SIZE, 38, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(btnAutorAdd, javax.swing.GroupLayout.PREFERRED_SIZE, 38, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jScrollPane4, javax.swing.GroupLayout.PREFERRED_SIZE, 92, javax.swing.GroupLayout.PREFERRED_SIZE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jLabel1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jPanel4, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jPanel2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(jLabel1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jPanel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jPanel4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(13, 13, 13))
        );

        jPanel2.getAccessibleContext().setAccessibleName("Consulta");

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void isbnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_isbnActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_isbnActionPerformed

    private void dtaPublicacaoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_dtaPublicacaoActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_dtaPublicacaoActionPerformed

    private void btnSalvarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnSalvarActionPerformed
        if(verificaPreenchimentoGeral()){
            if(gravar_alterar==1){
                gravar();
                gravar_alterar=0;
            }
            else{
                if(gravar_alterar==2){
                    alterar();
                    preencheTabela(pesquisaAutor.getText().toUpperCase());
                    gravar_alterar=0;
                }
                else{
                    JOptionPane.showMessageDialog(null, "Erro no Sistema!!!");
                }
            }
            limpaCampos();
            liberaCampos(false);
            liberaBotoes(true, false, false, false, true);
        }                                             
    }//GEN-LAST:event_btnSalvarActionPerformed

    private void btnCancelar1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnCancelar1ActionPerformed
        limpaCampos();
        liberaCampos(false);
        modelo_jtlConsultarAutor.setNumRows(0);
        liberaBotoes(true, false, false, false, true);
        gravar_alterar=0;
    }//GEN-LAST:event_btnCancelar1ActionPerformed

    private void btnExcluirActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnExcluirActionPerformed
        excluir();
        limpaCampos();
        liberaCampos(false);
        liberaBotoes(true, false, false, false, true);
        preencheTabela(pesquisaAutor.getText().toUpperCase());
    }//GEN-LAST:event_btnExcluirActionPerformed

    private void btnSairActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnSairActionPerformed
         this.dispose();
    }//GEN-LAST:event_btnSairActionPerformed

    private void btnNovoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnNovoActionPerformed
        liberaCampos(true);
        liberaBotoes(false, true, true, false, true);
        gravar_alterar = 1;
    }//GEN-LAST:event_btnNovoActionPerformed

    private void btnPesquisarProActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnPesquisarProActionPerformed
        preencheTabela(pesquisaAutor.getText());
    }//GEN-LAST:event_btnPesquisarProActionPerformed

    private void btnAutorRemActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnAutorRemActionPerformed
        removeAutorSelecionado(jtl_ConsultarAutorSelecionado.getSelectedRow());
    }//GEN-LAST:event_btnAutorRemActionPerformed

    private void btnAutorAddActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnAutorAddActionPerformed
        adicionaAutorSelecionado(
            Integer.parseInt(String.valueOf(jtlConsultarAutor.getValueAt(jtlConsultarAutor.getSelectedRow(), 0))),
            String.valueOf(jtlConsultarAutor.getValueAt(jtlConsultarAutor.getSelectedRow(), 1)),
            Double.parseDouble(String.valueOf(jtlConsultarAutor.getValueAt(jtlConsultarAutor.getSelectedRow(), 2)))
        );
    }//GEN-LAST:event_btnAutorAddActionPerformed

private void gravar(){
        try{
            livroDTO.setTituloLivro(tituloLivro.getText());
            livroDTO.setDtaPubli(Integer.parseInt(dtaPubli.getText()));
            livroDTO.setTemaLivro(temaLivro.getText());
            livroDTO.setLocalPubli(localPubli.getText());
            livroDTO.setEditoraLivro(editoraLivro.getText());
            livroDTO.setSinopse(sinopse.getText());
            livroDTO.setIdioma(idioma.getText());
            
            JOptionPane.showMessageDialog(null,
                    livroCTR.inserirLivro(livroDTO)
            );
        }
        catch(Exception e){
            System.out.println("Erro ao Gravar" + e.getMessage());
        }
    }

    private void excluir(){
       if(JOptionPane.showConfirmDialog(null, "Deseja Realmente excluir o Livro?","Aviso", JOptionPane.YES_NO_OPTION) == JOptionPane.YES_OPTION){
            JOptionPane.showMessageDialog(null,
                    livroCTR.excluirLivro(livroDTO)
            );
       }
    }

    private void alterar(){
        try{
            livroDTO.setTituloLivro(tituloLivro.getText());
            livroDTO.setDtaPubli(Integer.parseInt(dtaPubli.getText()));
            livroDTO.setTemaLivro(temaLivro.getText());
            livroDTO.setLocalPubli(localPubli.getText());
            livroDTO.setEditoraLivro(editoraLivro.getText());
            livroDTO.setSinopse(sinopse.getText());
            livroDTO.setIdioma(idioma.getText());
     
            JOptionPane.showMessageDialog(null,
                    livroCTR.alterarLivro(livroDTO)
            );
        }
        catch(Exception e){}
    }
    
    private void preencheTabela(String tituloLivro){
        try{
            modelo_jtlConsultarAutor.setNumRows(0);
            livroDTO.setTituloLivro(tituloLivro);
            rs = livroCTR.consultarLivro(livroDTO, 1);
            while(rs.next()){
                modelo_jtlConsultarAutor.addRow(new Object[]{
                  rs.getString("ISBN"),
                  rs.getString("tituloLivro"),
                });
            }        
        }
        catch(Exception erTab){
            System.out.println("Erro SQL: "+erTab);
        }  
    }

    private void preencheCampos(int ISBN){
        try{
            livroDTO.setISBN(ISBN);
            rs = livroCTR.consultarLivro(livroDTO, 2);
            if(rs.next()){
                limpaCampos();
                dtaPubli.setText(rs.getString("dtaPubli"));
                tituloLivro.setText(rs.getString("tituloLivro"));
                temaLivro.setText(rs.getString("temaLivro"));
                localPubli.setText(rs.getString("localPubli"));
                editoraLivro.setText(rs.getString("editoraLivro"));
                sinopse.setText(rs.getString("sinopse"));
                idioma.setText(rs.getString("idioma"));
                gravar_alterar = 2;
                liberaCampos(true);
            }
        }
        catch(Exception erTab){
            System.out.println("Erro SQL: "+erTab);
        }  
    }

    private void liberaCampos(boolean a){
        dtaPubli.setEnabled(a);
        tituloLivro.setEnabled(a);
        temaLivro.setEnabled(a);
        localPubli.setEnabled(a);
        editoraLivro.setEnabled(a);
        sinopse.setEnabled(a);
        idioma.setEnabled(a);
    }

    private void limpaCampos(){
        dtaPubli.setText("");
        tituloLivro.setText("");
        temaLivro.setText("");
        localPubli.setText("");
        editoraLivro.setText("");
        sinopse.setText("");
        idioma.setText("");
    }

    private void liberaBotoes(boolean a, boolean b, boolean c, boolean d, boolean e){
        btnNovo.setEnabled(a);
        btnSalvar.setEnabled(b);
        btnCancelar1.setEnabled(c);
        btnExcluir.setEnabled(d);
        btnSair.setEnabled(e);
    }

    private void verificaTamanho(JTextField jtextfield, int maximo) {                            
        String tamanho = jtextfield.getText();
        if(tamanho.length() >= maximo){
              jtextfield.setText(jtextfield.getText().substring(0, maximo-1));
        }
    }

    private void verificaTamanho(JTextArea jtextarea, int maximo) {                            
        String tamanho = jtextarea.getText();
        if(tamanho.length() >= maximo){
              jtextarea.setText(jtextarea.getText().substring(0, maximo-1));
        }
    }

    private boolean verificaPreenchimentoGeral() {                            
        if(dtaPubli.getText().equalsIgnoreCase("")){
              JOptionPane.showMessageDialog(null, "O campo Data de Publicação deve ser preenchido");
              dtaPubli.requestFocus();
              return false;
        }
        else{
            if(tituloLivro.getText().equalsIgnoreCase("")){
                JOptionPane.showMessageDialog(null, "O campo Título do Livro deve ser preenchido");
                tituloLivro.requestFocus();
                return false;
            }
            else{
                if(temaLivro.getText().equalsIgnoreCase("")){
                    JOptionPane.showMessageDialog(null, "O campo Tema do Livro deve ser selecionado");
                    temaLivro.requestFocus();
                    return false;
                }
                else{
                    if(localPubli.getText().equalsIgnoreCase("")){
                        JOptionPane.showMessageDialog(null, "O campo Local de Publicação deve ser preenchido");
                        localPubli.requestFocus();
                        return false;
                    }
                    else{
                        return true;
                    }
                }
            }
        }
    }
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JCheckBox aventura;
    private javax.swing.JButton btnAutorAdd;
    private javax.swing.JButton btnAutorRem;
    private javax.swing.JButton btnCancelar1;
    private javax.swing.JButton btnExcluir;
    private javax.swing.JButton btnNovo;
    private javax.swing.JButton btnPesquisarPro;
    private javax.swing.JButton btnSair;
    private javax.swing.JButton btnSalvar;
    private javax.swing.JCheckBox comedia;
    private javax.swing.JCheckBox drama;
    private javax.swing.JTextField dtaPublicacao;
    private javax.swing.JLabel iLabel1;
    private javax.swing.JLabel iLabel2;
    private javax.swing.JComboBox<String> idioma;
    private javax.swing.JTextField isbn;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JLabel jLabel7;
    private javax.swing.JLabel jLabel8;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JScrollPane jScrollPane4;
    private javax.swing.JTable jtlConsultarAutor;
    private javax.swing.JTable jtl_ConsultarAutorSelecionado;
    private javax.swing.JTextField pesquisaAutor;
    private javax.swing.JCheckBox romance;
    private javax.swing.JTextArea sinopse;
    private javax.swing.JCheckBox suspense;
    private javax.swing.JPanel temaLivro;
    private javax.swing.JCheckBox terror;
    private javax.swing.JTextField titulo;
    // End of variables declaration//GEN-END:variables

    private void removeAutorSelecionado(int selectedRow) {
        throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    }

    private void adicionaAutorSelecionado(int parseInt, String valueOf, double parseDouble) {
        throw new UnsupportedOperationException("Not supported yet."); // Generated from nbfs://nbhost/SystemFileSystem/Templates/Classes/Code/GeneratedMethodBody
    }
}
