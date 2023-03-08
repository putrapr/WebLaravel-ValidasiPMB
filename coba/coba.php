Maba::create([
  'nama' => 'Putra',
  'nik' => '331221230111110',
  'nilai_mtk' => '80',
  'nilai_bi' => '90',
  'nilai_bing' => '80',
  'nilai_peminatan' => '85',
  'organisasi' => '-',
  'jabatan' => '-',
  'penghargaan' => '-',
  'cita_cita' => '-',
  'asal_sekolah' => '-'
])

MabaDataDiri::create([
  'nama' => 'Putra',
  'nik' => '331221230111110',
  'id_nilai' => '1',
  'id_non_akademik' => '1'
])

MabaNilai::create([
  'nilai_mtk' => '80',
  'nilai_bi' => '90',
  'nilai_bing' => '80',
  'nilai_peminatan' => '85'
])

MabaNonAkademik::create([
  'nama' => 'Putra',
  'nik' => '331221230111110',
  'id_nilai' => '1'
  'id_non_akademik' => '1'
])


