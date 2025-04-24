// src/pages/Sobre.jsx
import React from "react";
import useDocumentTitle from "../hooks/useDocumentTitle";
import Header from "../components/Header";
import Footer from "../components/Footer";
import sobreImg from "../assets/img/sobre2.jpg";
import sobreTeam1 from "../assets/img/team-1.jpg";
import sobreTeam2 from "../assets/img/team-2.jpg";
import sobreTeam3 from "../assets/img/team-3.jpg";
import './../assets/css/sobre.css';

function Sobre() {
  useDocumentTitle("Sobre | Agroway");

  return (
    <>
      {/*Header*/}
      <Header />

      {/*sub-heading*/}
      <section class="sub-heading">
        <h1>Sobre Nós</h1>
      </section>
      
      {/*about*/}
      <section className="about">
        <div className="row">
          <div className="image">
            <img src={sobreImg} alt="Sobre nós" title="Sobre nós" />
          </div>
          <div className="content">
            <h3>Seja Bem-Vindo A <span>Agroway</span></h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Esse nesciunt impedit voluptatibus! Ipsam veniam, amet aliquid mollitia odio, 
              aliquam iure error deserunt sint nobis eius vitae, blanditiis ex commodi molestias! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Perspiciatis consequatur nostrum culpa rem debitis sequi accusantium pariatur placeat, facere, accusamus ullam. Facilis alias consequuntur natus voluptates. 
              Commodi incidunt asperiores a.
            </p>
          </div>
        </div>
      </section>

      <section className="team">
        <h3 className="heading">Nossa <span>Equipa</span></h3>

        <div className="box-container">
          <div class="box">
            <div class="image">
              <img src={sobreTeam1} alt="Team 1"/>
              <div class="share">
                <a href="tel:+244 999999999" class="fas fa-phone" title="Ligar Agora"></a>
                <a href="https://api.whatsapp.com/send/?phone=244999999999&text=Oi" target="_blank" class="fab fa-whatsapp" title="Enviar mensagem via Whatsapp"></a>
                <a href="#" class="fab fa-instagram" title="Ver Instagram"></a>
                </div>
            </div>
            <div class="content">
              <h3>Cliente</h3>
              <h5>Agroway</h5>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src={sobreTeam2}  alt="Team 2"/>
              <div class="share">
                <a href="tel:+244 999999999" class="fas fa-phone" title="Ligar Agora"></a>
                <a href="https://api.whatsapp.com/send/?phone=244999999999&text=Oi" target="_blank" class="fab fa-whatsapp" title="Enviar mensagem via Whatsapp"></a>
                <a href="#" class="fab fa-instagram" title="Ver Instagram"></a>
                </div>
            </div>
            <div class="content">
              <h3>Motorista</h3>
              <h5>Agroway</h5>
            </div>
          </div>
          <div class="box">
            <div class="image">
              <img src={sobreTeam3}  alt="Team 3"/>
              <div class="share">
                <a href="tel:+244 999999999" class="fas fa-phone" title="Ligar Agora"></a>
                <a href="https://api.whatsapp.com/send/?phone=244999999999&text=Oi" target="_blank" class="fab fa-whatsapp" title="Enviar mensagem via Whatsapp"></a>
                <a href="#" class="fab fa-instagram" title="Ver Instagram"></a>
                </div>
            </div>
            <div class="content">
              <h3>Produtora</h3>
              <h5>Agroway</h5>
            </div>
          </div>
        </div>
      </section>
      

      {/*footer*/}
      <Footer />
    </>
  );
}

export default Sobre;