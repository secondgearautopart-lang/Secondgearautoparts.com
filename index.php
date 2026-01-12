import React, { useState, useEffect } from 'react';
import { Truck, Package, Clock, Search, Menu, X, Star, Mail, Phone, MapPin, Users, Award, Wrench, CheckCircle, ChevronRight, Zap, Shield } from 'lucide-react';

const SecondGearEnhanced = () => {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [showModal, setShowModal] = useState(false);
  const [scrollY, setScrollY] = useState(0);
  const [stats, setStats] = useState({ clients: 0, deliveries: 0, years: 0, feedback: 0 });
  const [selectedYear, setSelectedYear] = useState('');
  const [selectedMake, setSelectedMake] = useState('');
  const [selectedModel, setSelectedModel] = useState('');
  const [selectedPart, setSelectedPart] = useState('');
  const [formData, setFormData] = useState({ name: '', email: '', phone: '', zip: '', agreed: false });
  const [contactForm, setContactForm] = useState({ name: '', email: '', message: '' });
  const [mousePos, setMousePos] = useState({ x: 0, y: 0 });

  const years = ['2024', '2023', '2022', '2021', '2020', '2019', '2018', '2017', '2016', '2015'];
  const makes = ['Toyota', 'Honda', 'Ford', 'Chevrolet', 'BMW', 'Mercedes', 'Audi', 'Nissan'];
  const models = ['Camry', 'Accord', 'F-150', 'Silverado', '3 Series', 'C-Class', 'A4', 'Altima'];
  const parts = ['Engine', 'Transmission', 'Alternator', 'Radiator', 'Steering Wheel', 'Headlight', 'Tail Light', 'Suspension'];

  useEffect(() => {
    const handleScroll = () => setScrollY(window.scrollY);
    const handleMouseMove = (e) => setMousePos({ x: e.clientX, y: e.clientY });
    
    window.addEventListener('scroll', handleScroll);
    window.addEventListener('mousemove', handleMouseMove);
    
    return () => {
      window.removeEventListener('scroll', handleScroll);
      window.removeEventListener('mousemove', handleMouseMove);
    };
  }, []);

  useEffect(() => {
    const duration = 2000;
    const steps = 60;
    const interval = duration / steps;
    let currentStep = 0;

    const timer = setInterval(() => {
      currentStep++;
      setStats({
        clients: Math.floor((125 / steps) * currentStep),
        deliveries: Math.floor((185 / steps) * currentStep),
        years: Math.floor((5 / steps) * currentStep),
        feedback: Math.floor((158 / steps) * currentStep)
      });
      if (currentStep >= steps) clearInterval(timer);
    }, interval);

    return () => clearInterval(timer);
  }, []);

  const testimonials = [
    { name: "John Smith", place: "Los Angeles, CA", text: "Found exactly what I needed at an unbeatable price. Fast delivery and quality parts!" },
    { name: "Sarah Johnson", place: "San Diego, CA", text: "Outstanding service! The team helped me find the perfect transmission for my truck." },
    { name: "Mike Davis", place: "Anaheim, CA", text: "Reliable parts and excellent customer support. Highly recommend SecondGear!" }
  ];

  const [currentTestimonial, setCurrentTestimonial] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentTestimonial((prev) => (prev + 1) % testimonials.length);
    }, 5000);
    return () => clearInterval(timer);
  }, []);

  const handleSubmit = (e) => {
    e.preventDefault();
    if (formData.name && formData.email && formData.phone && formData.zip && formData.agreed) {
      setShowModal(false);
      alert('Thank you! We will contact you soon with available parts.');
      setFormData({ name: '', email: '', phone: '', zip: '', agreed: false });
    }
  };

  const handleContactSubmit = (e) => {
    e.preventDefault();
    if (contactForm.name && contactForm.email && contactForm.message) {
      alert('Thank you for your message! We will get back to you soon.');
      setContactForm({ name: '', email: '', message: '' });
    }
  };

  const canProceed = () => {
    return selectedYear && selectedMake && selectedModel && selectedPart;
  };

  const services = [
    { icon: CheckCircle, title: "Quality Assurance", desc: "Guaranteeing automotive parts exceed expectations" },
    { icon: Award, title: "Exceptional Value", desc: "Balance between affordability and excellence" },
    { icon: Package, title: "Wide Selection", desc: "Diverse selection for all vehicle types" },
    { icon: Users, title: "Expert Guidance", desc: "Dedicated to helping you find the right parts" },
    { icon: Star, title: "Customer Satisfaction", desc: "Your satisfaction is our priority" },
    { icon: Wrench, title: "Quality Parts", desc: "Meticulously inspected second-hand components" }
  ];

  const portfolioItems = [
    { name: 'Engine', emoji: '⚙️' },
    { name: 'Steering Wheel', emoji: '🎮' },
    { name: 'Alternator', emoji: '🔋' },
    { name: 'Turbocharger', emoji: '💨' },
    { name: 'Radiator', emoji: '🌡️' },
    { name: 'Differential Gears', emoji: '⚡' },
    { name: 'Suspension', emoji: '🔧' },
    { name: 'Alloy Wheel', emoji: '⭕' },
    { name: 'Headlight', emoji: '💡' }
  ];

  const partsEmojis = ['⚙️', '🔧', '💡', '🔋', '⚡', '🎮'];

  return (
    <div className="min-h-screen bg-gray-50 overflow-x-hidden">
      <div className="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div className="absolute top-10 left-10 text-6xl opacity-5 animate-float">⚙️</div>
        <div className="absolute top-40 right-20 text-7xl opacity-5 animate-float-delayed">🔧</div>
        <div className="absolute bottom-40 left-32 text-5xl opacity-5 animate-float-slow">💡</div>
        <div className="absolute top-1/3 right-1/4 text-6xl opacity-5 animate-float">🔋</div>
        <div className="absolute bottom-20 right-40 text-8xl opacity-5 animate-float-delayed">⚡</div>
        <div className="absolute top-2/3 left-1/4 text-5xl opacity-5 animate-float-slow">🎮</div>
      </div>

      <header className={`fixed w-full top-0 z-50 transition-all duration-300 ${scrollY > 50 ? 'bg-white/95 backdrop-blur-md shadow-lg' : 'bg-transparent'}`}>
        <div className="container mx-auto px-4">
          <div className="flex items-center justify-between py-4">
            <div className="flex items-center space-x-2">
              <div className="relative">
                <Wrench className={`w-8 h-8 transition-colors ${scrollY > 50 ? 'text-red-600' : 'text-white'} animate-spin-slow`} />
              </div>
              <span className={`text-2xl font-bold transition-colors ${scrollY > 50 ? 'text-gray-800' : 'text-white'}`}>SecondGear</span>
            </div>
            
            <nav className="hidden md:flex space-x-6">
              {['Home', 'About', 'Services', 'Parts', 'Contact'].map((item) => (
                <a
                  key={item}
                  href={`#${item.toLowerCase()}`}
                  className={`transition-all hover:text-red-600 relative group ${scrollY > 50 ? 'text-gray-800' : 'text-white'}`}
                >
                  {item}
                  <span className="absolute bottom-0 left-0 w-0 h-0.5 bg-red-600 group-hover:w-full transition-all duration-300"></span>
                </a>
              ))}
            </nav>

            <button className="md:hidden" onClick={() => setMobileMenuOpen(!mobileMenuOpen)}>
              {mobileMenuOpen ? <X className={scrollY > 50 ? 'text-gray-800' : 'text-white'} /> : <Menu className={scrollY > 50 ? 'text-gray-800' : 'text-white'} />}
            </button>
          </div>
        </div>
      </header>

      {mobileMenuOpen && (
        <div className="fixed inset-0 bg-gray-900/98 backdrop-blur-sm z-40 md:hidden animate-fadeIn">
          <div className="flex flex-col items-center justify-center h-full space-y-8 text-white text-xl">
            {['Home', 'About', 'Services', 'Parts', 'Contact'].map((item, idx) => (
              <a
                key={item}
                href={`#${item.toLowerCase()}`}
                onClick={() => setMobileMenuOpen(false)}
                className="hover:text-red-500 transition-all transform hover:scale-110 animate-slideInLeft"
                style={{animationDelay: `${idx * 0.1}s`}}
              >
                {item}
              </a>
            ))}
          </div>
        </div>
      )}

      <section id="home" className="relative min-h-screen flex items-center bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 overflow-hidden">
        <div className="absolute inset-0">
          <div className="absolute inset-0 opacity-10">
            {[...Array(20)].map((_, i) => (
              <div
                key={i}
                className="absolute text-4xl animate-pulse"
                style={{
                  top: `${Math.random() * 100}%`,
                  left: `${Math.random() * 100}%`,
                  animationDelay: `${Math.random() * 3}s`,
                  animationDuration: `${3 + Math.random() * 2}s`
                }}
              >
                {partsEmojis[Math.floor(Math.random() * partsEmojis.length)]}
              </div>
            ))}
          </div>
          
          <div className="absolute top-20 left-20 w-72 h-72 bg-red-500 rounded-full blur-3xl opacity-20 animate-pulse"></div>
          <div className="absolute bottom-20 right-20 w-96 h-96 bg-blue-500 rounded-full blur-3xl opacity-20 animate-pulse" style={{animationDelay: '1s'}}></div>
          <div className="absolute top-1/2 left-1/2 w-80 h-80 bg-yellow-500 rounded-full blur-3xl opacity-10 animate-pulse" style={{animationDelay: '2s'}}></div>
        </div>
        
        <div 
          className="absolute inset-0 pointer-events-none"
          style={{
            transform: `translate(${mousePos.x * 0.02}px, ${mousePos.y * 0.02}px)`
          }}
        >
          <div className="absolute top-1/4 left-1/4 text-9xl opacity-5">🔧</div>
          <div className="absolute bottom-1/4 right-1/4 text-9xl opacity-5">⚙️</div>
        </div>
        
        <div className="container mx-auto px-4 py-20 relative z-10">
          <div className="grid md:grid-cols-2 gap-8 items-center">
            <div className="text-white space-y-6 animate-fadeInUp">
              <div className="inline-block px-4 py-2 bg-red-600/20 backdrop-blur-sm rounded-full border border-red-500/30 mb-4">
                <span className="flex items-center gap-2">
                  <Zap className="w-4 h-4" />
                  Premium Auto Parts Marketplace
                </span>
              </div>
              
              <h1 className="text-5xl md:text-7xl font-bold leading-tight">
                Unlock Value,<br />
                <span className="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-yellow-400">
                  Drive Quality
                </span>
              </h1>
              
              <p className="text-xl text-gray-300">
                Your source for Premium Second-Hand Auto Parts
              </p>
              
              <div className="flex flex-wrap gap-4 pt-4">
                <button 
                  onClick={() => document.getElementById('about')?.scrollIntoView({ behavior: 'smooth' })}
                  className="px-8 py-4 bg-red-600 hover:bg-red-700 rounded-lg font-semibold transition-all transform hover:scale-105 flex items-center gap-2 shadow-lg shadow-red-500/50"
                >
                  <Search className="w-5 h-5" />
                  Find Parts Now
                </button>
                
                <button className="px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm rounded-lg font-semibold transition-all transform hover:scale-105 flex items-center gap-2 border border-white/30">
                  <Shield className="w-5 h-5" />
                  Quality Guarantee
                </button>
              </div>
              
              <div className="flex gap-6 pt-8">
                <div className="text-center">
                  <div className="text-3xl font-bold text-red-400">125+</div>
                  <div className="text-sm text-gray-400">Happy Clients</div>
                </div>
                <div className="text-center">
                  <div className="text-3xl font-bold text-yellow-400">185+</div>
                  <div className="text-sm text-gray-400">Parts Delivered</div>
                </div>
                <div className="text-center">
                  <div className="text-3xl font-bold text-blue-400">5+</div>
                  <div className="text-sm text-gray-400">Years</div>
                </div>
              </div>
            </div>

            <div className="bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl p-6 animate-fadeInUp border border-gray-200" style={{animationDelay: '0.2s'}}>
              <h3 className="text-2xl font-bold text-gray-800 mb-2 flex items-center gap-2">
                <Search className="w-6 h-6 text-red-600" />
                Find Your Part
              </h3>
              <p className="text-gray-600 mb-4">Select your vehicle details</p>
              
              <div className="space-y-4">
                <div className="relative group">
                  <select
                    value={selectedYear}
                    onChange={(e) => setSelectedYear(e.target.value)}
                    className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all appearance-none bg-white group-hover:border-gray-300"
                  >
                    <option value="">Select Year</option>
                    {years.map(year => <option key={year} value={year}>{year}</option>)}
                  </select>
                  <ChevronRight className="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 rotate-90 pointer-events-none" />
                </div>

                <div className="relative group">
                  <select
                    value={selectedMake}
                    onChange={(e) => setSelectedMake(e.target.value)}
                    disabled={!selectedYear}
                    className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all appearance-none disabled:bg-gray-100 disabled:cursor-not-allowed group-hover:border-gray-300"
                  >
                    <option value="">Select Make</option>
                    {makes.map(make => <option key={make} value={make}>{make}</option>)}
                  </select>
                  <ChevronRight className="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 rotate-90 pointer-events-none" />
                </div>

                <div className="relative group">
                  <select
                    value={selectedModel}
                    onChange={(e) => setSelectedModel(e.target.value)}
                    disabled={!selectedMake}
                    className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all appearance-none disabled:bg-gray-100 disabled:cursor-not-allowed group-hover:border-gray-300"
                  >
                    <option value="">Select Model</option>
                    {models.map(model => <option key={model} value={model}>{model}</option>)}
                  </select>
                  <ChevronRight className="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 rotate-90 pointer-events-none" />
                </div>

                <div className="relative group">
                  <select
                    value={selectedPart}
                    onChange={(e) => setSelectedPart(e.target.value)}
                    disabled={!selectedModel}
                    className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all appearance-none disabled:bg-gray-100 disabled:cursor-not-allowed group-hover:border-gray-300"
                  >
                    <option value="">Select Part</option>
                    {parts.map(part => <option key={part} value={part}>{part}</option>)}
                  </select>
                  <ChevronRight className="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 rotate-90 pointer-events-none" />
                </div>

                <button
                  onClick={() => canProceed() && setShowModal(true)}
                  disabled={!canProceed()}
                  className="w-full px-6 py-4 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white rounded-lg font-semibold transition-all transform hover:scale-105 disabled:from-gray-300 disabled:to-gray-400 disabled:cursor-not-allowed disabled:transform-none shadow-lg flex items-center justify-center gap-2"
                >
                  <Search className="w-5 h-5" />
                  Go Find 'EM
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section className="py-16 bg-white relative overflow-hidden">
        <div className="absolute top-0 right-0 text-9xl opacity-5 transform rotate-12">⚙️</div>
        <div className="absolute bottom-0 left-0 text-9xl opacity-5 transform -rotate-12">🔧</div>
        
        <div className="container mx-auto px-4 relative z-10">
          <div className="grid md:grid-cols-3 gap-8">
            {[
              { icon: Truck, title: "Fast Shipping", desc: "Lightning fast deliveries to your door", emoji: "🚚" },
              { icon: Package, title: "Easy Returns", desc: "7-day exchange for faulty products", emoji: "📦" },
              { icon: Clock, title: "24/7 Support", desc: "Always ready to serve you", emoji: "⏰" }
            ].map((feature, idx) => (
              <div
                key={idx}
                className="relative text-center p-8 rounded-2xl hover:shadow-2xl transition-all transform hover:-translate-y-3 cursor-pointer group bg-gradient-to-br from-gray-50 to-white border border-gray-100"
              >
                <div className="absolute top-4 right-4 text-4xl opacity-20 group-hover:opacity-30 transition-opacity">
                  {feature.emoji}
                </div>
                <feature.icon className="w-16 h-16 mx-auto mb-4 text-red-600 group-hover:scale-110 transition-transform group-hover:rotate-6" />
                <h3 className="text-xl font-bold mb-2 group-hover:text-red-600 transition-colors">{feature.title}</h3>
                <p className="text-gray-600">{feature.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="py-16 bg-gradient-to-r from-red-600 via-red-700 to-red-800 text-white relative overflow-hidden">
        <div className="absolute inset-0 opacity-10">
          {[...Array(15)].map((_, i) => (
            <div
              key={i}
              className="absolute text-6xl animate-pulse"
              style={{
                top: `${Math.random() * 100}%`,
                left: `${Math.random() * 100}%`,
                animationDelay: `${Math.random() * 2}s`
              }}
            >
              {partsEmojis[Math.floor(Math.random() * 4)]}
            </div>
          ))}
        </div>
        
        <div className="container mx-auto px-4 relative z-10">
          <div className="grid md:grid-cols-4 gap-8 text-center">
            {[
              { value: stats.clients, label: "Happy Clients", icon: Users, suffix: "+" },
              { value: stats.deliveries, label: "Parts Delivered", icon: Package, suffix: "+" },
              { value: stats.years, label: "Years Experience", icon: Award, suffix: "+" },
              { value: stats.feedback, label: "Positive Reviews", icon: Star, suffix: "+" }
            ].map((stat, idx) => (
              <div 
                key={idx} 
                className="animate-fadeInUp bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-all transform hover:scale-105" 
                style={{animationDelay: `${idx * 0.1}s`}}
              >
                <stat.icon className="w-12 h-12 mx-auto mb-2" />
                <div className="text-5xl font-bold mb-2">{stat.value}{stat.suffix}</div>
                <div className="text-red-100">{stat.label}</div>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section id="about" className="py-20 bg-gray-50 relative overflow-hidden">
        <div className="absolute top-10 left-10 text-8xl opacity-5 animate-float">💡</div>
        <div className="absolute bottom-10 right-10 text-8xl opacity-5 animate-float-delayed">🔋</div>
        
        <div className="container mx-auto px-4 relative z-10">
          <div className="max-w-4xl mx-auto text-center">
            <div className="inline-block px-4 py-2 bg-red-100 rounded-full text-red-600 font-semibold mb-4">
              About SecondGear
            </div>
            <h2 className="text-5xl font-bold mb-6">Redefining Auto Parts Excellence</h2>
            <p className="text-xl text-gray-600 leading-relaxed">
              At SecondGear Auto Parts, we redefine reliability in the realm of second-hand auto components. 
              Our commitment lies in delivering premium quality parts with unmatched service. 
              Experience cost-effective solutions without compromising on excellence.
            </p>
          </div>
        </div>
      </section>

      <section id="services" className="py-20 bg-white relative overflow-hidden">
        <div className="absolute top-1/2 left-1/4 text-9xl opacity-5 transform -translate-y-1/2">⚙️</div>
        
        <div className="container mx-auto px-4 relative z-10">
          <div className="text-center mb-12">
            <div className="inline-block px-4 py-2 bg-red-100 rounded-full text-red-600 font-semibold mb-4">
              Our Services
            </div>
            <h2 className="text-5xl font-bold mb-4">Why Choose SecondGear</h2>
            <p className="text-xl text-gray-600">Quality parts, exceptional service</p>
          </div>
          
          <div className="grid md:grid-cols-3 gap-8">
            {services.map((service, idx) => (
              <div
                key={idx}
                className="p-6 bg-gradient-to-br from-gray-50 to-white rounded-2xl hover:shadow-2xl transition-all transform hover:-translate-y-2 border border-gray-100 group"
              >
                <div className="bg-red-100 w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:bg-red-600 transition-colors group-hover:scale-110 transform">
                  <service.icon className="w-8 h-8 text-red-600 group-hover:text-white transition-colors" />
                </div>
                <h3 className="text-xl font-bold mb-2 group-hover:text-red-600 transition-colors">{service.title}</h3>
                <p className="text-gray-600">{service.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section id="parts" className="py-20 bg-gray-50">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <div className="inline-block px-4 py-2 bg-red-100 rounded-full text-red-600 font-semibold mb-4">
              Our Inventory
            </div>
            <h2 className="text-5xl font-bold mb-4">Ready to Deliver</h2>
            <p className="text-xl text-gray-600">Premium parts in stock</p>
          </div>
          
          <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            {portfolioItems.map((item, idx) => (
              <div
                key={idx}
                className="bg-white rounded-2xl p-6 hover:shadow-2xl transition-all transform hover:-translate-y-2 cursor-pointer group border border-gray-100"
              >
                <div className="text-6xl mb-4 group-hover:scale-125 transition-transform">{item.emoji}</div>
                <h4 className="font-bold text-lg group-hover:text-red-600 transition-colors">{item.name}</h4>
                <p className="text-sm text-gray-500 mt-1">In Stock</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="py-20 bg-white">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <div className="inline-block px-4 py-2 bg-red-100 rounded-full text-red-600 font-semibold mb-4">
              Testimonials
            </div>
            <h2 className="text-5xl font-bold mb-4">What Our Customers Say</h2>
          </div>
          
          <div className="max-w-3xl mx-auto">
            <div className="bg-gradient-to-br from-red-50 to-white p-8 rounded-2xl shadow-xl transition-all duration-500 border border-red-100">
              <div className="flex items-center mb-4">
                {[...Array(5)].map((_, i) => (
                  <Star key={i} className="w-6 h-6 fill-yellow-400 text-yellow-400" />
                ))}
              </div>
              <p className="text-lg text-gray-700 mb-4 italic">{testimonials[currentTestimonial].text}</p>
              <div className="flex items-center justify-between">
                <div>
                  <h4 className="font-bold text-lg">{testimonials[currentTestimonial].name}</h4>
                  <p className="text-gray-600">{testimonials[currentTestimonial].place}</p>
                </div>
                <div className="flex gap-2">
                  {testimonials.map((_, idx) => (
                    <button
                      key={idx}
                      onClick={() => setCurrentTestimonial(idx)}
                      className={`h-3 rounded-full transition-all ${idx === currentTestimonial ? 'bg-red-600 w-8' : 'bg-gray-300 w-3'}`}
                    />
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" className="py-20 bg-gray-900 text-white relative overflow-hidden">
        <div className="absolute inset-0 opacity-5">
          <div className="absolute top-10 left-10 text-8xl animate-float">🔧</div>
          <div className="absolute top-40 right-20 text-9xl animate-float-delayed">⚙️</div>
          <div className="absolute bottom-20 left-1/4 text-7xl animate-float-slow">💡</div>
          <div className="absolute bottom-40 right-1/3 text-8xl animate-float">🔋</div>
        </div>
        
        <div className="container mx-auto px-4 relative z-10">
          <div className="text-center mb-12">
            <div className="inline-block px-4 py-2 bg-red-600/20 backdrop-blur-sm rounded-full text-red-400 font-semibold mb-4 border border-red-500/30">
              Contact Us
            </div>
            <h2 className="text-5xl font-bold mb-4">Get In Touch</h2>
            <p className="text-xl text-gray-400">We are here to help you find the perfect part</p>
          </div>
          
          <div className="grid md:grid-cols-2 gap-12">
            <div className="space-y-6">
              <div className="flex items-start gap-4 p-4 bg-white/5 backdrop-blur-sm rounded-xl hover:bg-white/10 transition-all group">
                <div className="bg-red-600 p-3 rounded-lg group-hover:scale-110 transition-transform">
                  <Mail className="w-6 h-6" />
                </div>
                <div>
                  <h4 className="font-semibold mb-1 text-lg">Email</h4>
                  <p className="text-gray-400">Info@secondgearautoparts.com</p>
                  <p className="text-gray-400">support@secondgearautoparts.com</p>
                </div>
              </div>
              
              <div className="flex items-start gap-4 p-4 bg-white/5 backdrop-blur-sm rounded-xl hover:bg-white/10 transition-all group">
                <div className="bg-red-600 p-3 rounded-lg group-hover:scale-110 transition-transform">
                  <Phone className="w-6 h-6" />
                </div>
                <div>
                  <h4 className="font-semibold mb-1 text-lg">Phone</h4>
                  <p className="text-gray-400">+1 (XXX) XXX-XXXX</p>
                  <p className="text-gray-400">Available 7 days a week</p>
                </div>
              </div>
              
              <div className="flex items-start gap-4 p-4 bg-white/5 backdrop-blur-sm rounded-xl hover:bg-white/10 transition-all group">
                <div className="bg-red-600 p-3 rounded-lg group-hover:scale-110 transition-transform">
                  <MapPin className="w-6 h-6" />
                </div>
                <div>
                  <h4 className="font-semibold mb-1 text-lg">Address</h4>
                  <p className="text-gray-400">9541 Ball Road, Unit 302</p>
                  <p className="text-gray-400">Anaheim, CA 92804, USA</p>
                </div>
              </div>
            </div>

            <div className="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
              <div className="space-y-4">
                <input
                  type="text"
                  placeholder="Your Name"
                  value={contactForm.name}
                  onChange={(e) => setContactForm({...contactForm, name: e.target.value})}
                  className="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-500 transition-all text-white placeholder-gray-400"
                />
                <input
                  type="email"
                  placeholder="Your Email"
                  value={contactForm.email}
                  onChange={(e) => setContactForm({...contactForm, email: e.target.value})}
                  className="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-500 transition-all text-white placeholder-gray-400"
                />
                <textarea
                  placeholder="Your Message"
                  rows={4}
                  value={contactForm.message}
                  onChange={(e) => setContactForm({...contactForm, message: e.target.value})}
                  className="w-full px-4 py-3 bg-gray-800/50 border border-gray-700 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-500 transition-all text-white placeholder-gray-400"
                ></textarea>
                <button 
                  onClick={handleContactSubmit}
                  className="w-full px-6 py-4 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 rounded-lg font-semibold transition-all transform hover:scale-105 shadow-lg shadow-red-500/50"
                >
                  Send Message
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer className="bg-gray-950 text-gray-400 py-12 relative overflow-hidden">
        <div className="absolute inset-0 opacity-5">
          <div className="absolute bottom-0 left-1/4 text-9xl">⚙️</div>
          <div className="absolute top-0 right-1/4 text-8xl">🔧</div>
        </div>
        
        <div className="container mx-auto px-4 relative z-10">
          <div className="grid md:grid-cols-3 gap-8 mb-8">
            <div>
              <div className="flex items-center gap-2 mb-4">
                <Wrench className="w-6 h-6 text-red-600" />
                <span className="text-xl font-bold text-white">SecondGear</span>
              </div>
              <p className="text-sm">
                9541 Ball Road, Unit 302<br />
                Anaheim, CA 92804, USA
              </p>
            </div>
            
            <div>
              <h4 className="text-white font-semibold mb-4">Quick Links</h4>
              <div className="space-y-2">
                <a href="#home" className="block hover:text-red-500 transition-colors">Home</a>
                <a href="#about" className="block hover:text-red-500 transition-colors">About</a>
                <a href="#services" className="block hover:text-red-500 transition-colors">Services</a>
                <a href="#contact" className="block hover:text-red-500 transition-colors">Contact</a>
              </div>
            </div>
            
            <div>
              <h4 className="text-white font-semibold mb-4">Legal</h4>
              <div className="space-y-2">
                <a href="terms-of-service.html" className="block hover:text-red-500 transition-colors">Terms of Service</a>
                <a href="shipping-return-policy.html" className="block hover:text-red-500 transition-colors">Shipping & Return Policy</a>
                <a href="refund-policy.html" className="block hover:text-red-500 transition-colors">Refund Policy</a>
                <a href="warranty.html" className="block hover:text-red-500 transition-colors">Warranty</a>
                <a href="privacy-policy.html" className="block hover:text-red-500 transition-colors">Privacy Policy</a>
              </div>
            </div>
          </div>
          
          <div className="border-t border-gray-800 pt-8 text-center">
            <p>&copy; 2024 SecondGear Auto Parts. All Rights Reserved</p>
            <p className="text-sm mt-2">Developed by <a href="https://vinodthadhani.com" className="text-red-500 hover:text-red-400 transition-colors">Vinod Thadhani</a></p>
          </div>
        </div>
      </footer>

      {showModal && (
        <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
          <div className="bg-white rounded-2xl p-8 max-w-md w-full animate-fadeInUp">
            <h3 className="text-2xl font-bold mb-4">Almost There!</h3>
            <p className="text-gray-600 mb-6">Please provide your contact info so we can find the best parts for you.</p>
            
            <div className="space-y-4">
              <input
                type="text"
                placeholder="Your Name"
                value={formData.name}
                onChange={(e) => setFormData({...formData, name: e.target.value})}
                className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all"
              />
              <input
                type="email"
                placeholder="Email"
                value={formData.email}
                onChange={(e) => setFormData({...formData, email: e.target.value})}
                className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all"
              />
              <input
                type="tel"
                placeholder="Phone"
                value={formData.phone}
                onChange={(e) => setFormData({...formData, phone: e.target.value})}
                className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all"
              />
              <input
                type="text"
                placeholder="Zip Code"
                value={formData.zip}
                onChange={(e) => setFormData({...formData, zip: e.target.value})}
                className="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:border-red-500 focus:ring-2 focus:ring-red-200 transition-all"
              />
              
              <div className="flex items-start gap-2">
                <input 
                  type="checkbox" 
                  checked={formData.agreed}
                  onChange={(e) => setFormData({...formData, agreed: e.target.checked})}
                  className="mt-1" 
                />
                <label className="text-sm text-gray-600">I agree to the terms and conditions</label>
              </div>

              <div className="flex gap-4">
                <button
                  onClick={() => setShowModal(false)}
                  className="flex-1 px-6 py-3 border-2 border-gray-300 rounded-lg font-semibold hover:bg-gray-50 transition-all"
                >
                  Cancel
                </button>
                <button
                  onClick={handleSubmit}
                  className="flex-1 px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg font-semibold transition-all"
                >
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>
      )}

      <style>{`
        @keyframes fadeInUp {
          from {
            opacity: 0;
            transform: translateY(30px);
          }
          to {
            opacity: 1;
            transform: translateY(0);
          }
        }
        
        @keyframes float {
          0%, 100% {
            transform: translateY(0px);
          }
          50% {
            transform: translateY(-20px);
          }
        }
        
        @keyframes float-delayed {
          0%, 100% {
            transform: translateY(0px);
          }
          50% {
            transform: translateY(-25px);
          }
        }
        
        @keyframes float-slow {
          0%, 100% {
            transform: translateY(0px);
          }
          50% {
            transform: translateY(-15px);
          }
        }
        
        @keyframes spin-slow {
          from {
            transform: rotate(0deg);
          }
          to {
            transform: rotate(360deg);
          }
        }
        
        @keyframes fadeIn {
          from {
            opacity: 0;
          }
          to {
            opacity: 1;
          }
        }
        
        @keyframes slideInLeft {
          from {
            opacity: 0;
            transform: translateX(-50px);
          }
          to {
            opacity: 1;
            transform: translateX(0);
          }
        }
        
        .animate-fadeInUp {
          animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .animate-float {
          animation: float 6s ease-in-out infinite;
        }
        
        .animate-float-delayed {
          animation: float-delayed 7s ease-in-out infinite;
        }
        
        .animate-float-slow {
          animation: float-slow 8s ease-in-out infinite;
        }
        
        .animate-spin-slow {
          animation: spin-slow 20s linear infinite;
        }
        
        .animate-fadeIn {
          animation: fadeIn 0.3s ease-out forwards;
        }
        
        .animate-slideInLeft {
          animation: slideInLeft 0.5s ease-out forwards;
        }
      `}</style>
    </div>
  );
};

export default SecondGearEnhanced;