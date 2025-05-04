# RouteMaps Package
![CI Status](https://github.com/uincodiy/routemaps/actions/workflows/ci.yml/badge.svg)

## Instalasi

# Backend (Laravel)
composer require incodiy/routemaps

# Frontend (React)
npm install @incodiy/routemaps-react

# React Native
npm install @incodiy/routemaps-react-native


## Penggunaan

// Contoh React
    import { MapContainer } from '@incodiy/routemaps-react';
    
    function App() {
      return (
        <MapContainer 
          start={[-6.2, 106.8]}
          end={[-6.3, 106.9]}
        />
      );
    }
