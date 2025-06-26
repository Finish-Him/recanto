    <!-- Formulário de Contato -->
    <section id="formulario" class="formulario-contato">
        <div class="container">
            <div class="formulario-content">
                <div class="formulario-header">
                    <h2>Reserve sua Data</h2>
                    <p>Preencha os dados abaixo e entraremos em contato rapidamente</p>
                </div>
                
                <form id="contactForm" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nome Completo *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">WhatsApp *</label>
                            <input type="tel" id="phone" name="phone" placeholder="(21) 99999-9999" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="event_date">Data do Evento</label>
                            <input type="date" id="event_date" name="event_date">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="event_location">Local do Evento</label>
                            <input type="text" id="event_location" name="event_location" placeholder="Bairro, Cidade">
                        </div>
                        <div class="form-group">
                            <label for="guests">Número de Convidados</label>
                            <select id="guests" name="guests">
                                <option value="">Selecione</option>
                                <option value="Até 50">Até 50 convidados</option>
                                <option value="51 a 100">51 a 100 convidados</option>
                                <option value="101 a 150">101 a 150 convidados</option>
                                <option value="Mais de 150">Mais de 150 convidados</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Observações</label>
                        <textarea id="message" name="message" rows="4" placeholder="Conte-nos mais sobre seu evento..."></textarea>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="btn-submit">
                            <i class="fab fa-whatsapp"></i>
                            Reservar a minha data 
                        </button>
                        <p class="form-note">* Campos obrigatórios</p>
                    </div>
                </form>
                
                <div id="form-message" class="form-message" style="display: none;"></div>
            </div>
        </div>
    </section>

