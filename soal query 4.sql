select @row := @row + 1 "No", replace(mu.unit_nama, 'POLI ', '') "Poli", concat(md.diagnosa_kode, ' - ', md.diagnosa_name) "Diagnosa", count(md.diagnosa_kode) "Jumlah"
from master_unit mu
left join kunjungan_pasien kp on kp.m_unit_id = mu.unit_id
right join diagnosa_pasien dp on dp.kunjungan_id = kp.pendaftaran_id
left join master_diagnosa md on md.diagnosa_id = dp.m_diagnosa_id, (select @row := 0) r
where lower(replace(mu.unit_nama, 'POLI ', '')) = lower(:poli)
group by mu.unit_nama, md.diagnosa_kode, md.diagnosa_name
order by @row
limit 10

select @row := @row + 1 "No", mp.pasien_kota "Kota", concat(md.diagnosa_kode, ' - ', md.diagnosa_name) "Diagnosa", count(md.diagnosa_kode) "Jumlah"
from master_pasien mp
left join kunjungan_pasien kp on kp.m_pasien_id = mp.pasien_id
right join diagnosa_pasien dp on dp.kunjungan_id = kp.pendaftaran_id
left join master_diagnosa md on md.diagnosa_id = dp.m_diagnosa_id, (select @row := 0) r
where lower(mp.pasien_kota) = lower(:poli)
group by mp.pasien_kota, md.diagnosa_kode, md.diagnosa_name
order by @row
limit 10