<div class="dashboard-body">

    <div class="container-fluid">
        <div class="flex-between mb-32 gap-3">
            <h2 class="fs-30">Level Team</h2>
            <!-- <div class="flex-align gap-2">
                <a href="{{route('user.ticket')}}"
                    class="btn btn--sm btn--base "> <i class="fas fa-plus"></i>
                    New Ticket</a>
            </div> -->
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card custom--card h-100">
                    <div class="card-header">
                        <form class="table-search-wrapper">
                            <div class="input-group style-left">
                                <input type="text" class="form-control form--control md-style" name="search" placeholder="Search by Name, Username, Email" value="{{ request()->search }}">
                                <button class="input-group-text">
                                    <img src="{{asset('')}}user/images/search.png" width="20" height="20" alt="">

                                </button>
                            </div>
                        </form>
                    </div>
                   <div class="card-body">
                       <table class="table table table--responsive--md">
                           <thead>
                               <tr>
                                   <th>Sr No</th>
                                   <th>Rank</th>
                                   <th>Level 1</th>
                                   <th>Level 2</th>
                                   <th>Level 3</th>
                                   <th>Target</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>1</td>
                                   <td>Manager</td>
                                   <td>2.5</td>
                                   <td>2.5</td>
                                   <td>2.5</td>
                                   <td>5000</td>
                               </tr>
                               <tr>
                                   <td>2</td>
                                   <td>Form Manager</td>
                                   <td>7</td>
                                   <td>7</td>
                                   <td>7</td>
                                   <td>15000</td>
                               </tr>
                               <tr>
                                   <td>3</td>
                                   <td>Sen. Form Manager</td>
                                   <td>20</td>
                                   <td>20</td>
                                   <td>20</td>
                                   <td>40000</td>
                               </tr>
                               <tr>
                                   <td>4</td>
                                   <td>Asso Manager</td>
                                   <td>50</td>
                                   <td>50</td>
                                   <td>50</td>
                                   <td>1 Lakh</td>
                               </tr>
                               <tr>
                                   <td>5</td>
                                   <td>Asso Sen. Manager</td>
                                   <td>110</td>
                                   <td>110</td>
                                   <td>110</td>
                                   <td>2.5 Lakh</td>
                               </tr>
                               <tr>
                                   <td>6</td>
                                   <td>Platinum Rank</td>
                                   <td>250</td>
                                   <td>250</td>
                                   <td>250</td>
                                   <td>7.5 Lakh</td>
                               </tr>
                               <tr>
                                   <td>7</td>
                                   <td>Diamond</td>
                                   <td>750</td>
                                   <td>750</td>
                                   <td>750</td>
                                   <td>20 Lakh</td>
                               </tr>
                               <tr>
                                   <td>8</td>
                                   <td>Green Diamond</td>
                                   <td>1650</td>
                                   <td>1650</td>
                                   <td>1650</td>
                                   <td>50 Lakh</td>
                               </tr>
                               <tr>
                                   <td>9</td>
                                   <td>Crown Diamond</td>
                                   <td>3650</td>
                                   <td>3650</td>
                                   <td>3650</td>
                                   <td>1 Cr</td>
                               </tr>
                               <tr>
                                   <td>10</td>
                                   <td>Ambassador</td>
                                   <td>7850</td>
                                   <td>7850</td>
                                   <td>7850</td>
                                   <td>2 Cr</td>
                               </tr>
                               <tr>
                                   <td>11</td>
                                   <td>Crown Ambassador</td>
                                   <td>12850</td>
                                   <td>12850</td>
                                   <td>12850</td>
                                   <td>5 Cr</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>
                </div>


            </div>
        </div>
    </div>

</div>