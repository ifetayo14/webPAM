@extends('layout.main')

@section('title')
    <title>Tambah Data Soal</title>
@endsection

<script type="text/javascript">
    function showHideAnswer(x) {
        if (x == 1) {
            document.getElementById('trueFalseField').classList.remove('hidden');
            document.getElementById('pilBerField').classList.add('hidden');
            document.getElementById('essayField').classList.add('hidden');
            document.getElementById('essayField2').classList.add('hidden');
        }
        else if(x == 2) {
            document.getElementById('trueFalseField').classList.add('hidden');
            document.getElementById('pilBerField').classList.remove('hidden');
            document.getElementById('essayField').classList.add('hidden');
            document.getElementById('essayField2').classList.add('hidden');
        }
        else if(x == 3) {
            document.getElementById('trueFalseField').classList.add('hidden');
            document.getElementById('pilBerField').classList.add('hidden');
            document.getElementById('essayField').classList.remove('hidden');
            document.getElementById('essayField2').classList.remove('hidden');
        }
    }
</script>

<style>
    .hidden{
        display: none;
    }
</style>
@section('main-content')
    <h3 style="text-align: center">TAMBAH DATA SOAL</h3>
    <br>

    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form class="form-horizontal" method="post" action="{{ url('/addNewQuestion') }}">
            @csrf
            <div class="form-group">
                <label class="control-label col-sm-2" for="question">Pertanyaan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="question" placeholder="Pertanyaan" name="question">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="type">Tipe Pertanyaan:</label>
                <div class="col-sm-10">
                    <input type="radio" id="trueFalse" name="type" value="trueFalse" onclick="showHideAnswer(1)">
                    <label for="trueFalse">True False</label>
                    <input type="radio" id="pilBer" name="type" value="pilBer" onclick="showHideAnswer(2)">
                    <label for="pilBer">Pilihan Berganda</label>
                    <input type="radio" id="essay" name="type" value="essay" onclick="showHideAnswer(3)">
                    <label for="essay">Isian</label>
                </div>
            </div>
            <div class="form-group hidden" id="trueFalseField">
                <label class="control-label col-sm-2" for="question">Jawaban:</label>
                <div class="col-sm-10">
                    <input type="radio" id="true" name="answerTF" value="true">
                    <label for="true">True</label>
                    <input type="radio" id="false" name="answerTF" value="false">
                    <label for="false">False</label>
                </div>
            </div>
            <div class="form-group hidden" id="pilBerField">
                <label class="control-label col-sm-2" for="answer">A:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="answer" placeholder="Jawaban" name="answer[]">
                    <input type="text" id="true" name="statusArr[]" placeholder="1 = Benar; 0 = Salah">
                </div>
                <label class="control-label col-sm-2" for="answer">B:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="answer" placeholder="Jawaban" name="answer[]">
                    <input type="text" id="true" name="statusArr[]" placeholder="1 = Benar; 0 = Salah">
                </div>
                <label class="control-label col-sm-2" for="answer">C:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="answer" placeholder="Jawaban" name="answer[]">
                    <input type="text" id="true" name="statusArr[]" placeholder="1 = Benar; 0 = Salah">
                </div>
                <label class="control-label col-sm-2" for="answer">D:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="answer" placeholder="Jawaban" name="answer[]">
                    <input type="text" id="true" name="statusArr[]" placeholder="1 = Benar; 0 = Salah">
                </div>
                <label class="control-label col-sm-2" for="answer">E:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="answer" placeholder="Jawaban" name="answer[]">
                    <input type="text" id="true" name="statusArr[]" placeholder="1 = Benar; 0 = Salah">
                </div>
            </div>
            <div class="form-group hidden" id="essayField">
                <label class="control-label col-sm-2" for="answer">Jawaban:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="answer" placeholder="Jawaban" name="answerEssay">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="difficulties">Tingkat Kesulitan:</label>
                <div class="col-sm-10">
                    <input type="radio" id="mudah" name="difficulties" value="Mudah">
                    <label for="mudah">Mudah</label>
                    <input type="radio" id="sedang" name="difficulties" value="Sedang">
                    <label for="sedang">Sedang</label>
                    <input type="radio" id="sulit" name="difficulties" value="Sulit">
                    <label for="sulit">Sulit</label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="grade">Nilai:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="grade" placeholder="Nilai" name="grade">
                </div>
            </div>
            <div class="form-group hidden" id="essayField2">
                <label class="control-label col-sm-2" for="case_type">Case Sensitivity:</label>
                <div class="col-sm-10">
                    <input type="radio" id="ya" name="case_type" value="1">
                    <label for="ya">Ya</label>
                    <input type="radio" id="tidak" name="case_type" value="0">
                    <label for="tidak">Tidak</label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="quiz_id">ID Quiz:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="quiz_id" placeholder="ID Quiz" name="quiz_id">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
