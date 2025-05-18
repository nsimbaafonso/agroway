import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import { useEffect } from 'react';
import AOS from 'aos';
import 'aos/dist/aos.css';

import Home from './pages/Home';
import Sobre from './pages/Sobre';
import Blog from './pages/Blog';
import Produtos from './pages/Produtos';
import Contato from './pages/Contato';
import Post from './pages/Post';
import NotFound from './pages/NotFound';
import Teste from './pages/Teste';
import DashboardHome from './dashboard/DashboardHome';
// import './assets/css/style.css'; // estilo global
import GlobalStyle from './assets/css/GlobalStyle';

function App() {
  // useEffect é um hook que roda após o componente ser montado
  useEffect(() => {
    // Inicializa a biblioteca AOS (Animate On Scroll)
    AOS.init({
      duration: 1000, // Define a duração das animações em milissegundos (1 segundo)
      once: false,    // Permite que a animação ocorra todas as vezes que o elemento entrar na tela
      //mirror: true,   // Faz a animação acontecer também ao rolar para cima
    });
  }, []); // O array vazio faz com que o useEffect rode apenas uma vez, quando o componente for carregado

  return (
    <Router>
      <GlobalStyle />
      <Routes>
        {/*Rotas do site principal*/}
        <Route path="/" element={<Home />} />
        <Route path="/sobre" element={<Sobre />} />
        <Route path="/blog" element={<Blog />} />
        <Route path="/blog/post/" element={<Post />} />
        <Route path="/produtos" element={<Produtos />} />
        <Route path="/contato" element={<Contato />} />
        <Route path="/teste" element={<Teste />} />

        {/*Rotas do dashboard*/}
        <Route path="/dashboard" element={<DashboardHome />} />

        {/*Rotas não encontradas*/}
        <Route path="*" element={<NotFound />} />
      </Routes>
    </Router>
  );
}

export default App;
