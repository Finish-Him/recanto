    <!-- Promoção Section -->
    <section id="promocao" class="promocao">
        <div class="container">
            <div class="promocao-content">
                <div class="promocao-image">
                    <img src="<?php echo asset('images/criativo-promocao.jpg'); ?>" alt="Mega Promoção Recanto Estações" class="promocao-img">
                </div>
                <div class="promocao-details">
                    <h2 class="promocao-title">MEGA PROMOÇÃO</h2>
                    <div class="promocao-price">
                        <span class="price-big">R$ <?php echo PROMO_PRICE; ?></span>
                        <span class="price-small">4 estações completas</span>
                    </div>
                    <div class="promocao-benefits">
                        <div class="benefit">
                            <i class="fas fa-check-circle"></i>
                            <span>Parcelamos em <?php echo PROMO_INSTALLMENTS; ?>x sem juros</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check-circle"></i>
                            <span>Apenas R$ 100 de sinal</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check-circle"></i>
                            <span>Operadores inclusos</span>
                        </div>
                        <div class="benefit">
                            <i class="fas fa-check-circle"></i>
                            <span>Deslocamento grátis</span>
                        </div>
                    </div>
                    <div class="promocao-cta">
                        <a href="<?php echo getWhatsAppLink('promocao'); ?>" target="_blank" class="btn-promocao">
                            <i class="fab fa-whatsapp"></i>
                            APROVEITAR PROMOÇÃO
                        </a>
                        <p class="promocao-urgency">⏰ Oferta por tempo limitado!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

