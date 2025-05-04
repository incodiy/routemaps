# RouteMaps Package
![CI Status](https://github.com/username/incodiy-routemaps/actions/workflows/ci.yml/badge.svg)

## Instalasi
```bash
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


# 10. Verifikasi Akhir
1. Pastikan semua file telah tercommit:
```bash
git status

2. Cek struktur direktori:
tree -L 3 -a

3. Tes instalasi lokal:
# Di direktori contoh Laravel
composer config repositories.routemaps path ../laravel
composer require incodiy/routemaps:@dev

# Di direktori contoh React
npm link ../react